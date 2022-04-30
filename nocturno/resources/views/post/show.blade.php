@extends('layouts.app', ['page' => __('PostShow'), 'pageSlug' => 'postshows'])


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Post</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $post->title }}
                        </div>
                        <div class="form-group">
                            <strong>Num:</strong>
                            {{ $post->num }}
                        </div>
                        <div class="form-group">
                            <strong>Body:</strong>
                            {{ $post->body }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
