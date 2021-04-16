@extends('admin_layout')
@section('admin_content')
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Products</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Products</h2>
						</div>
						<p class="alert-success">
					<?php
						$message=Session::get('message');
						if ($message) {
							echo $message;
							Session::put('message',null);
						}

					?>
					</p>
					<div class="box-content">
						<form class="form-horizontal" action="{{URL::to('admin/save-product')}}" method="post" enctype="multipart/form-data">
							@csrf
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="date01">Product Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="product_name">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Product SKU</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="product_sku">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Product Price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="product_price">
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError3">Product Category</label>
								<div class="controls">
								  <select id="selectError3" name="category_id">
								  <option>select category</option>
								  	<?php 
                                $all_published_category=DB::table('categorys')
                                                            ->where('publication_status',1)
                                                            ->get();
                                foreach ($all_published_category as $v_category) 
                                {
                            ?>  
									<option value="{{$v_category->id}} ">{{$v_category->category_name}}</option>
									<?php 
								}
									?>
								  </select>
								</div>
							  </div>
							  <!---------------------------------------------->
							  <div class="control-group">
								<label class="control-label" for="selectError3">Product Brand</label>
								<div class="controls">
								  <select id="selectError3" name="brand_id">
								  <option>select Brand</option>
								  	<?php 
                                $all_published_brand=DB::table('brands')
                                                            ->where('brand_status',1)
                                                            ->get();
                                foreach ($all_published_brand as $v_brand) 
                                {
                            ?>  
									<option value="{{$v_brand->id}} ">{{$v_brand->brand_name}}</option>
									<?php 
								}
									?>
								  </select>
								</div>
							  </div>
							  <!-------------------------------------------------->
							  <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="product_description" rows="3">
								</textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">Product Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="product_image" type="file" required="">
							  </div>
							</div> 
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
								<input type="checkbox" name="product_status" value="1">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Product</button>
							 
							</div>
						  </fieldset>
						</form>   
						<a href="{{URL::to('admin/all-product')}}">
    						<button>Cancel</button>
						</a>
					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection
