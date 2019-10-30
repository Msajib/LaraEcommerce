@extends('master.master_header')

@section('content')
<div class="container margin-top">
<div class="row">
@include('master.partial.nav')
<div class="col-8">
                    <!--                    <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
                                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
                                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                                        </div>-->
                    <div class="widget">
                        <h3>All Products</h3>
                        <div class="row">
                          @foreach ($products as $product)


                            <div class="col-md-4 mb-5">
                                <div class="card product_list">
                                  @php   $i = 1; @endphp
                                  @foreach ($product->images as $image)
                                    @if ($i > 0)
                                        <img class="card-img-top" src="{{ asset('images/Products/'. $image->image) }}" alt="Product Picture">
                                    @endif
                                  @php   $i --;  @endphp
                                  @endforeach


                                    <div class="card-body">
                                        <h4 class="card-title">{{ $product->title }}</h4>
                                        <p class="card-text">৳ {{ $product->price }}</p>
                                        <a href="#" class="card-link btn btn-outline-success">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                          @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--END Side bar section-->

@endsection
