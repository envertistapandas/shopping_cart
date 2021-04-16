@extends('welcome')

@section('content')   
<h2 class="title text-center">All Items</h2>
                            <?php 
                                $all_product_info=DB::table('products')
                                                            ->where('product_status',1)
                                                            ->get();
                                foreach ($all_product_info as $v_published_product) 
                                {
                            ?>  
  
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to($v_published_product->product_image)}}" style="height: 300px;" alt="" />
                                            <h2>Rs-{{$v_published_product->product_price}}</h2>
                                            <p>{{$v_published_product->product_name}}</p>
                                            <a href="{{URL::to('/add-to-product'.$v_published_product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            <!--<li><a href="{{URL::to('/view_product'.$v_published_product->id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>-->
                                            
                                        </div> 
                                        
                                </div>
                            </div>
                        </div>
                  <?php } ?>  
                    </div> 
                    
@endsection
