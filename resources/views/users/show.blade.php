@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="card">
                    @if(session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            <strong>{{session()->get('message')}}</strong>
                        </div>
                    @endif
                    <div class="card-header">Details of <strong>{{$user->firstname}}</strong></div>
                    <div class="card-body">
                        <div class="justify-content-center d-flex">
                            <div>Last Name   :   <mark>{{$user->lastname}}</mark></div>
                        </div>
                        <div class="justify-content-center d-flex">
                            <div>Address     :   <mark>{{$user->address}}</mark></div>
                        </div>

                        <div><a href="/users/{{$user->id}}/edit" class="text-dark" style="float:right">Edit details of {{$user->firstname}}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
            