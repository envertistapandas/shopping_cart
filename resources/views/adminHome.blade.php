@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>
                <div class="card-body">
                <body>
					<!-- start: Header -->
					<div class="container-fluid-full">
					<div class="row-fluid">	
					<!-- start: Main Menu -->
			 <div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{URL::to('admin/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<!--<li><a href="{{URL::to('/add-catagory')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add Catagory</span></a></li>
						<li><a href="{{URL::to('/all-category')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> All Category</span></a></li>
						<li><a class="submenu" href="{{URL::to('/add-product')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Products</span></a></li>					
						<li><a class="submenu" href="{{URL::to('/all-product')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Products</span></a></li>
						<li><a class="submenu" href="{{URL::to('/add-brand')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Brands</span></a></li>
						<li><a class="submenu" href="{{URL::to('/all-brand')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Brands</span></a></li>-->
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			@yield('admin_content')
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
	<div class="clearfix"></div>
	
	
	
	<!-- start: JavaScript-->

		<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>	
		<script src="{{asset('backend/js/modernizr.js')}}"></script>	
		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>
		<script src="{{asset('backend/js/fullcalendar.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('backend/js/excanvas.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>		
		<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.noty.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>	
		<script src="{{asset('backend/js/counter.js')}}"></script>	
		<script src="{{asset('backend/js/retina.js')}}"></script>
		<script src="{{asset('backend/js/custom.js')}}"></script>
		<!-- end: JavaScript-->
	 	<!-- bootbox code -->
    	<script type="text/javascript" src="{{asset('https://raw.githubusercontent.com/makeusabrew/bootbox/gh-pages/bootbox.js')}}"></script>
    	<script>
   			 $(document).on("click", ".remove", function(e) {
       		 bootbox.confirm("Are you sure you want to delete?", function(result) {
            	if(result){
              console.log('write code of remove item.');
            	}
        	}); 
    		})	;
		</script>
	
</body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection