@extends('layouts.back')

@section('pageTitle')
    <a class="navbar-brand" href="#">Blogs</a>
@endsection

@section('content')
        
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{ Form::open(['method' => 'post', 'route' => 'blogs.store', 'files' => true]) }}
                        <div class="form-group">
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title', null, ['class' => 'form-control', 'require']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('slug', 'Slug') }}
                            {{ Form::text('slug', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'editor', 'rows' => '10', 'cols' => '80']) }}
                        </div>
            
                        <div class="form-group">
                            {{ Form::label('thumbnail', 'Thumbnail') }}
                            {{ Form::file('thumbnail', null, ['class' => 'form-control-file'])}}
                        </div>

                        <div class="form-group">
                            {{ Form::label('meta_title', 'Meta title') }}
                            {{ Form::text('meta_title', null, ['class' => 'form-control', 'require']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('meta_description', 'Meta Description') }}
                            {{ Form::text('meta_description', null, ['class' => 'form-control', 'require']) }}
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-fill">Save</button>
                        </div>
                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('public/js/back/plugins/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'editor' );

        if($('#slug').length) {
            $('#title').keyup(function() {
                title = $(this).val();
                
                base = $('base').attr('href');

                $.get(base+'/get-slug/'+title).done(function(response) {
                    $('#slug').val(response.slug);
                });
            });
        }
    </script>
@endsection