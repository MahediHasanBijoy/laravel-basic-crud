@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5">Add New Post</h1>
            <div class="col-md-6 offset-md-3 mt-5">
                <form action="{{route('posts.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control mb-2">
                    </div>
                    <div class="form-group">
                        <label for="">Content</label>
                        <textarea type="text" name="content" class="form-control mb-2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Author</label>
                        <input type="text" name="author" class="form-control mb-2">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
            </div>
        </div>
    </div>
@endsection