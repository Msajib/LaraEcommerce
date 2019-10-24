
@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
<div class="content-wrapper">
  <div class="card">
    <div class="card-header">
      Add Products
    </div>
    <div class="card-body">
      <form method="post" action="{{ route('admin.product.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="pTitle" aria-describedby="emailHelp" placeholder="product Title ">
          <small id="emailHelp" class="form-text text-muted">Add Product Title in this input filed</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Price</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="pPrice" aria-describedby="emailHelp" placeholder="product Price ">
          <small id="emailHelp" class="form-text text-muted">Add Product Title in this input filed</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Quantity</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="pQuantity" aria-describedby="emailHelp" placeholder="product Quantity">
          <small id="emailHelp" class="form-text text-muted">Add Product Title in this input filed</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea name="pDescription" rows="8" cols="80" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Products</button>
      </form>
    </div>
  </div>

</div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection
