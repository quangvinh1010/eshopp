@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Product</h4>
                <p class="card-description">Edit the product details</p>
                <form class="forms-sample" action="{{ route('admin.products.update', $product->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="exampleInputImage">Image</label>
                        <input name="image" value="{{ $product->image }}" type="text" class="form-control" id="exampleInputImage" placeholder="Image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input name="name" value="{{ $product->name }}" type="text" class="form-control" id="exampleInputName" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription">Description</label>
                        <input name="description" value="{{ $product->description }}" type="text" class="form-control" id="exampleInputDescription" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrice">Price</label>
                        <input name="price" value="{{ $product->price }}" type="text" class="form-control" id="exampleInputPrice" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputQuantity">Quantity</label>
                        <input name="quantity" value="{{ $product->quantity }}" type="text" class="form-control" id="exampleInputQuantity" placeholder="Quantity">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
