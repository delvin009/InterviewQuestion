@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="card">              
                    <div class="card-header">Notes List <span><a href="/add_notes/{{$user->id}}" class="text-dark" style="float: right">Add Notes</a></span></div>
                    <div class="card-body">
                        @if(session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                <strong>{{session()->get('message')}}</strong>
                            </div>
                        @endif

                        @if(session()->has('status'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{session()->get('status')}}</strong>
                            </div>
                        @endif
                        <div class="row">
                            @foreach($notes as $note)
                                <div class="col-4 pt-5">
                                    <img src="/storage/{{$note->file}}" class="w-100">
                                    <div>{{$note->note}}</div>
                                    <form action="/delete/{{$note->id}}" method="post">  
                                        @csrf 
                                        @method('DELETE')
                                        <div><button  class="btn btn-danger mt-3">delete</button></div>
                                    </form>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection