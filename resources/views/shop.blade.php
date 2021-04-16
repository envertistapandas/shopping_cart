@extends('welcome')
@section('content')  
<h2 class="title text-center">All Items</h2>
@foreach($products as $pro) 
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="http://127.0.0.1:8000/images/{{ $pro->image_path }}" style="height: 300px;" alt="{{ $pro->image_path }}"" />
                                            <h2>Rs-{{ $pro->price }}</h2>
                                            <p>{{ $pro->name }}</p>
                                            <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $pro->product_name }}" id="name" name="name">
                                                <input type="hidden" value="{{ $pro->product_price }}" id="price" name="price">
                                                <input type="hidden" value="{{ $pro->product_image }}" id="img" name="img">
                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                <div class="card-footer" style="background-color: white;">
                                                    <div class="row">
                                                        <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                            <i class="fa fa-shopping-cart"></i> add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endforeach 
                    </div> 
 @endsection
