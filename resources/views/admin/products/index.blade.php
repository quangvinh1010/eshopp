@extends('admin.layout')

@section('content')
@if(Session::has('message'))
    <h3>{{ Session::get('message')}}</h3>
@endif

<div class="row">
    <a href="{{ route('admin.products.create') }}" class="form-control">Create New</a>
</div>
<div class="row">
    <div class="col-lg-14 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Hoverable Table</h4>
                <p class="card-description">Add class <code>.table-hover</code></p>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>image</th>
                            <th>name</th>
                            <th>des</th>
                            <th>price</th>
                            <th>quantity</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productList as $product)
                        <tr>    
                            <td>#</td>
                            <td>{{$product->image}}</td>
                            <td class="text-danger ">{{$product->name}} <i class="mdi mdi-arrow-down"></i></td>
                            <td class="text-danger text-wrap">{{$product->description}} <i class="mdi mdi-arrow-down"></i></td>
                            <td class="text-danger">{{$product->price}} <i class="mdi mdi-arrow-down"></i></td>
                            <td class="text-danger">{{$product->quantity}} <i class="mdi mdi-arrow-down"></i></td>
                            <td>
                                <a class="badge badge-danger" href="{{route('admin.products.edit', $product->id)}}">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('admin.products.destroy', $product->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit">DELETE</button>
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