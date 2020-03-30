@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User</div>
                    <div class="card-body">
                        @if(session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                <strong>{{session()->get('message')}}</strong>
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>User First Name</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($userprofiles as $userprofile)
                                    <tr>
                                        <td><a href="users/{{$userprofile->id}}" class="text-dark">{{$userprofile->firstname}}</a></td>
                                        <td><a href="notes/{{$userprofile->id}}" class="text-dark">Notes List</a></td>
                                    </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection