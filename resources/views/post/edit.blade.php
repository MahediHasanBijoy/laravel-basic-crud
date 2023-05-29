@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5">Edit Post</h1>
            <div class="col-md-6 offset-md-3 mt-5">
                <form action="{{route('posts.update', $post->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control mb-2" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="">Content</label>
                        <input type="text" name="content" class="form-control mb-2" value="{{ $post->content }}">
                    </div>
                    <div class="form-group">
                        <label for="">Author</label>
                        <input type="text" name="author" class="form-control mb-2" value="{{ $post->author }}">
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>

                </form>
            </div>
        </div>
    </div>
@endsection