@extends('layouts.back')

@section('styles')
    <link href="{{ asset('public/css/back/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/back/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="#"><i class="pe-7s-display1"></i>Blogs</a>
    <a href="{{ route('blogs.create') }}" class="navbar-brand"><i class="pe-7s-plus"></i>New BLog</a>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table id="blog" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Views</th>
                            <th>Published</th>
                            <th>Published By</th>
                            <th>Meta Title</th>
                            <th>Meta Description</th>
                            <th>Created At</th>                   
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td @if($blog->published) style="border-left:5px solid green" @endif>{{$loop->iteration}}</td>
                            <td>
                                <img src="{{ asset('public/img/'.$blog->thumbnail) }}" class="img-fluid small" style="max-width:80px">
                            </td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->slug}}</td>
                            <td>{{$blog->views}}</td>
                            <td>@if($blog->published)True @else False @endif</td>
                            <td>{{$blog->publisher->name}}</td>
                            <td>{{$blog->meta_title}}</td>
                            <td>{{$blog->meta_description}}</td>
                            <td>{{ date('Y M d (l)',strtotime($blog->created_at)) }}</td>
                            <td>{{date('Y M d (l)',strtotime($blog->updated_at))}}</td>
                            <td>
                            <a href="{{ route('blogs.edit', $blog->slug) }}" class="btn btn-info btn-fill btn-sm">
                                Edit 
                                    <a href="{{ route('toggle.blog',$blog->slug) }}">@if($blog->published) | Unublish @else | Publish @endif </a>

                            </td>
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
            $('#blog').DataTable();
        } );
    </script>
@endsection   