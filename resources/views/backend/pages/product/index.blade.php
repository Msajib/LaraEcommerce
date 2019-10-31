
@extends('backend.layouts.master')
@section('content')

<div class="main-panel">
<div class="content-wrapper">
  <div class="card">
    <div class="card-header">
      Manage Products
    </div>
    <div class="card-body">
      <table class="table table-hover table-striped">
        @include('backend.partials.messages')
        <tr>
          <th>#</th>
          <th>Product Title</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Action</th>
        </tr>
        @foreach ($products as $product)

          <tr>
            <td>#</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
              <a href="{{ route('admin.product.edit',$product->id) }}" class="btn btn-success">Edit</a>
              <a href="#deleteModal{{ $product->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
              <!-- Delete Modal -->
              <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Are you sure to delete?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-footer">
                      <form class="" action="{{ route('admin.product.delete',$product->id) }}" method="post">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Permanent Delete</button>
                      </form>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Delete Modal Close-->

            </td>
          </tr>
        @endforeach
      </table>
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
