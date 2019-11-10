@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Post</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('posts.update', $post->id) }}" method="post">
                    @csrf
                    @method('patch')

                    <edit-post-component :post-data="{{ json_encode($post) }}"></edit-post-component>

                </form>
            </div>
        </div>
    </div>
@endsection
