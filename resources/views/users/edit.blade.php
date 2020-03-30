@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Details of {{$user->firstname}}</div>
                    <div class="card-body">
                        <form action="/users/{{$user->id}}" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="firstname" class="col-form-label col-md-4">First Name</label>
                                <input type="text" name="firstname" class="form-control" value="{{old('firstname') ?? $user->firstname}}">
                                <div style="color:red">{{$errors->first('firstname')}}</div>
                            </div>

                            <div class="form-group">
                                <label for="lastname" class="col-form-label col-md-4">Last Name</label>
                                <input type="text" name="lastname" class="form-control" value="{{old('lastname') ?? $user->lastname}}">
                                <div style="color:red">{{$errors->first('lastname')}}</div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="col-form-label col-md-4">Address</label>
                                <input type="text" name="address" class="form-control" value="{{old('address') ?? $user->address}}" cols="3" rows="3">
                                <div style="color:red">{{$errors->first('address')}}</div>
                            </div>

                            <div class="for-group">
                                <div class="col-md-2 offset-col-md-2">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection