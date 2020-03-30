@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Note against {{$user->name}}</div>
                    <div class="card-body">
                        <form action="/store_notes" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="note" class="col-form-label col-md-4">Note</label>
                                <input type="text" name="note" class="form-control" value="{{old('note')}}">
                                <div style="color:red">{{$errors->first('note')}}</div>
                            </div>

                            <div class="form-group">
                                <label for="file" class="col-form-label col-md-4">Upload File</label>
                                <input type="file" name="file" class="form-control" value="{{old('file')}}">
                                <div style="color:red">{{$errors->first('file')}}</div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 offset-col-md-2">
                                    <button class="btn btn-primary" type="submit">Add Note</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection