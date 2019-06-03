@extends('layouts.back')

@section('pageTitle')
    <a class="navbar-brand" href="#">Dashboard</a>
@endsection

@section('content')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                {{ Form::open(['method' => 'patch', 'route' => 'admin.profile.update']) }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{ Form::label('name', 'Name') }}
                                                {{ Form::text('name', $user->name, ['class' => 'form-control', 'required']) }}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{ Form::label('email', 'Email') }}
                                                {{ Form::email('email', $user->email, ['class' => 'form-control', 'readonly']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                        </div>
                    
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            
                            <div class="content">
                                
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


@endsection