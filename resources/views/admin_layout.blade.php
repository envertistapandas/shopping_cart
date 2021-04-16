
	<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
</head>

<body>


			<!-- start: Header -->
			<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Dashboard</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>{{ Auth::user()->name }}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<!--<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>-->
								<!--<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>-->
								<li><a href="{{ route('admin.logout') }}"><i class="halflings-icon off"></i> Logout</a></li>
								
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<!--<li><a href="{{URL::to('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>-->
						<li><a href="{{URL::to('admin/all-category')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Categorys</span></a></li>	
						<li><a href="{{URL::to('admin/all-product')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Products</span></a></li>	
						<li><a href="{{URL::to('admin/all-brand')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Brands</span></a></li>	
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<div class="row">
            
        </div>
				
			
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
		<!---------------------Laravel Default----------------------->
		
		<!-------------------End laravel Default--------------------->
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
    });
</script>
	
</body>
</html>