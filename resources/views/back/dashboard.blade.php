@extends('layouts.back')

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('admin.home') }}">Dashboard</a>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title"><i class="pe-7s-display1"></i>Blogs</h4>
                        </div>
                        <div class="content" style="font-weight:bold; font-size:25px;">
                            {{$blogs}}
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                        <h4 class="title"><i class="pe-7s-user"></i>User</h4>
                        </div>
                        <div class="content" style="font-weight:bold; font-size:25px;">
                            {{$admins}}
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><i class="pe-7s-comment"></i>Contact</h4>
                            </div>
                            <div class="content" style="font-weight:bold; font-size:25px;">
                                {{$contacts}}
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    

@endsection