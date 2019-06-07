@extends('layouts.back')

@section('styles')
    <link href="{{ asset('public/css/back/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/back/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('admins.index') }}"><i class="pe-7s-add-user"></i>User</a>
    <a href="{{ route('admins.create') }}" class="navbar-brand"><i class="pe-7s-plus"></i>New User</a>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table id="contact" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>sn</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>                   
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admins as $admin)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->created_at}}</td>
                            <td>{{$admin->updated_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 @endsection
 @section('scripts')
    
    <script src="{{ asset('public/js/back/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/js/back/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
    <script>	
        $(document).ready(function() {
            $('#contact').DataTable();
        } );
    </script>
@endsection   