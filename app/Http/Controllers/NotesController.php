<?php

namespace App\Http\Controllers;

use App\Note;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class NotesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_notes(User $user)
    {
        return view('notes.addnotes', compact('user'));
    }

    public function store_notes()
    {
        $data = request()->validate([
            "note" => ['required'],
            "file" => ['required','image'],
        ]);
        $file = (request('file')->store('uploads','public'));
        // dd($data);
        auth()->user()->notes()->create([
            'note' => $data['note'],
            'file' => $file,
        ]);

        $filePath = Image::make(public_path("storage/{$file}"))->fit(1200,1200);
        $filePath->save();

        return redirect('/notes/' . auth()->user()->id)->with('message', 'Notes created successfully');
    }

    public function notes(User $user)
    {
        $notes = auth()->user()->notes()->get(); 
        return view('notes.notes', compact('notes','user'));
    }

    public function delete(Note $notes)
    {
        // $note = auth()->user()->notes()->delete($user->notes->id); dd($note);
        $note = Note::where('id', $notes->id); //dd($note);
        $note->delete();

        return redirect('/notes/' . auth()->user()->id)->with('status', 'Note deleted successfully');
    }
}
