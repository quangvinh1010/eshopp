@extends('admin.layout')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="container">
        <h1>Create Product</h1>
        <form action="submit_product.php" method="POST">
            <label for="productName">image</label>
            <textarea id="productDescription" name="productDescription" rows="1" required></textarea>

            <label for="productDescription">name:</label>
            <textarea id="productDescription" name="productDescription" rows="1" required></textarea>

            <label for="productCategory">des:</label>
            <textarea id="productDescription" name="productDescription" rows="1" required></textarea>
            </select>

            <label for="productPrice">price </label>
            <textarea id="productDescription" name="productDescription" rows="1" required></textarea>

            <label for="productPrice">quantity </label>
            <textarea id="productDescription" name="productDescription" rows="1" required></textarea>

            <button type="submit">Create Product</button>
            <button type="submit">Cancel</button>
        </form>
        <form method="POST" action="/admin/products/submit_product">
    <!-- Your form fields -->
    <button type="submit">Submit</button>
</form>

    </div>
</div>


              
@endsection