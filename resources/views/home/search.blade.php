@extends('layout')

@section('content')

<div class="small-container">


    <div class="row row-2">
        <h2>search Products</h2>
    </div>

    <div class="row">
    @foreach($productSearch as $product)
        <div class="col-4">

            <a href="{{ url('products.show', $product->id)}}">
                <img src="{{ url('/image/images/product-4.jpg')}}" alt="IMAGE-PRODUCT">
            </a>
          
            <h4>{{ $product->name}}</h4>
            <div class="rating">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <p>{{ $product->price}}</p>

        </div>
        @endforeach

    </div>


</div>

@endsection