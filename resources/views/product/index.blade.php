@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <a href="{{route('products.create')}}" class="btn btn-primary btn-sm float-end">Add Product</a>
                <h1 class="text-center">Products List</h1>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="col-3">Name</th>
                                <th class="col-3">Price</th>
                                <th class="col-2">Quantity</th>
                                <th class="col-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl = 1;
                            @endphp
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $sl++ }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->qty }}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id)}}" class="btn btn-primary btn-sm">Edit</a> 
                                    <form class="d-inline" action="{{route('products.destroy', $product->id)}}" method="post">
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