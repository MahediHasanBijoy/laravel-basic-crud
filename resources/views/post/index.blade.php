@php
use Illuminate\Support\Str;
    
@endphp

@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5">
                <a href="{{route('posts.create')}}" class="btn btn-primary btn-sm float-end">Add Post</a>
                <h1 class="text-center">Posts List</h1>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="col-2">Title</th>
                                <th class="col-4">Content</th>
                                <th class="col-3">Author</th>
                                <th class="col-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl = 1;
                            @endphp
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $sl++ }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ Str::limit($post->content, 40) }}</td>
                                <td>{{ $post->author }}</td>
                                <td>
                                    <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary btn-sm">Edit</a> 
                                    <form class="d-inline" action="{{route('posts.destroy', $post->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                    </form>
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