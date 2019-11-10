@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3>{{$post->title}}</h3>
                    <p class="lead">{!! $post->body !!}</p>
                    <a class="btn btn-success" href="{{ route('posts.index') }}" role="button">Home page</a>
                    <a class="btn btn-secondary" href="{{ route('posts.edit', $post->id) }}" role="button">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
