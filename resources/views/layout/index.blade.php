@extends('master.master_header')

@section('content')
@include('master.partial.nav')
<div class="col-8">
                    <!--                    <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
                                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
                                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                                        </div>-->
                    <div class="widget">
                        <h3>Featured products</h3>
                        <div class="row">
                            <div class="col-md-3 mb-5">
                                <div class="card product_list">
                                    <img class="card-img-top" src="images/Products/product1.png" alt="Product Picture">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some example </p>
                                        <a href="#" class="card-link btn btn-outline-success">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="card product_list">
                                    <img class="card-img-top" src="images/Products/product1.png" alt="Product Picture">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some example </p>
                                        <a href="#" class="card-link btn btn-outline-success">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="card product_list">
                                    <img class="card-img-top" src="images/Products/product1.png" alt="Product Picture">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some example </p>
                                        <a href="#" class="card-link btn btn-outline-success">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="card product_list">
                                    <img class="card-img-top" src="images/Products/product1.png" alt="Product Picture">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some example </p>
                                        <a href="#" class="card-link btn btn-outline-success">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="card product_list">
                                    <img class="card-img-top" src="images/Products/product1.png" alt="Product Picture">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some example </p>
                                        <a href="#" class="card-link btn btn-outline-success">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="card product_list">
                                    <img class="card-img-top" src="images/Products/product1.png" alt="Product Picture">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some example </p>
                                        <a href="#" class="card-link btn btn-outline-success">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="card product_list">
                                    <img class="card-img-top" src="images/Products/product1.png" alt="Product Picture">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some example </p>
                                        <a href="#" class="card-link btn btn-outline-success">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <!--END Side bar section-->

@endsection