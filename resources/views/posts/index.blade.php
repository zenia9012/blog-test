@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-secondary my-2" href="{{ route('posts.create') }}" role="button">Create post</a>
            </div>
        </div>
        <div class="row">

            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="jumbotron">
                        <h3>{{$post->title}}</h3>
                        <p class="lead">{!! $post->body !!}</p>
                        <a class="btn btn-success" href="{{ route('posts.show', $post->id) }}" role="button">View</a>
                        <a class="btn btn-secondary" href="{{ route('posts.edit', $post->id) }}" role="button">Edit</a>

                        <div class="d-inline-block">
                            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Delete" />
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
