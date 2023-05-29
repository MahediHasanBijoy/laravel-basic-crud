@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5">Edit Product</h1>
            <div class="col-md-6 offset-md-3 mt-5">
                <form action="{{route('products.update', $product->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control mb-2" value="{{ $product->name }}">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="price" class="form-control mb-2" value="{{ $product->price }}">
                    </div>
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <input type="text" name="qty" class="form-control mb-2" value="{{ $product->qty }}">
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>

                </form>
            </div>
        </div>
    </div>
@endsection