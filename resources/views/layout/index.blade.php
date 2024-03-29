
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>Mayapur Online Store</title>
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
    <link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
	<link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="../css/themecss/lib.css" rel="stylesheet">
	<link href="../js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="../css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="../css/themecss/so-categories.css" rel="stylesheet">
	<link href="../css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="../css/themecss/animate.css" rel="stylesheet">
	<link href="../css/themecss/so-super-category.css" rel="stylesheet">
	<link id="color_scheme" href="../css/theme.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
	

</head>

<body class="common-home res layout-home1" style="overflow-x: hidden;">
    <div id="wrapper" class="wrapper-full banners-effect-7">
		<!-- Header Container  -->
		<header id="header" class=" variantleft type_1">
			<!-- Header Top -->
			<div class="header-top compact-hidden">
				<div class="container">
					<div class="row">
						<div class="header-top-left  col-lg-4  hidden-sm col-md-5 hidden-xs">
							<ul class="list-inlines">
								<li class="hidden-xs" >
									<div class="welcome-msg"> 
										<ul class="list-msg"> 
											<li><label class="label-msg">This week</label> <a href="#">Sale special too good to miss in every gear</a></li> 
											<li><label class="label-msg">Tomorrow</label> <a href="#">Laten ipsum dolor sit amet. In gravida pellen</a></li> 
										</ul> 
									</div>
								</li>
							</ul>
							
						</div>
						<div class="header-top-right collapsed-block col-lg-8 col-sm-12 col-md-7 col-xs-12 ">
							<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
							<div class="tabBlock" id="TabBlock-1">
								<ul class="top-link list-inline">
									
									
									<li class="checkout hidden">
										<a href="checkout.html" class="top-link-checkout" title="Checkout">
											<span >Checkout</span>
										</a>
									</li>
									<li class="login hidden">
										<a href="cart.html" title="Shopping Cart">
											<span >Shopping Cart</span>
										</a>
									</li>
									<li class="form-group currency currencies-block">
										<form action="/" method="post" enctype="multipart/form-data" id="currency">
											<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
												<span class="icon icon-credit "></span> 
												INR
											</a>
											
										</form>
									</li>
									<li class="form-group languages-block ">
										<form action="/" method="post" enctype="multipart/form-data" id="bt-language">
											<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
												<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/demo/flags/gb.png" alt="English" title="English">
												<span class="">English</span>
												
											</a>
											
										</form>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header Top -->
			<!-- Header center -->
			<div class="header-center">
				<div class="container">
					<div class="row">
						<!-- LOGO -->
						<div class="navbar-logo col-md-3 col-sm-4 col-xs-10">
						   <a href="/"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
						</div>
						<div class="header-center-right col-md-9 col-sm-8 col-xs-2">
							<div class="responsive so-megamenu  megamenu-style-dev">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">
										<div class="navbar-header">
											<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>	
										</div>
										
										<div class="megamenu-wrapper ">
											<span id="remove-megamenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu " data-transition="slide" data-animationtime="250">
														@foreach($cats as $cat)
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="" class="clearfix">
																<strong>
                                                                    {{$cat->name}}
                                                                </strong>
																<span class="label"></span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: fit-content; display: none;">
																<div class="content">
																	<?php $total=1; ?>
																	@foreach($subCats as $subs)
																		@if($subs->catId == $cat->id)
																			<?php $total++; ?>
																		@endif
																	@endforeach
																	
																	@if($total<=4)
																	<div class="row">
																		<div class="col-md-12">
																		<a href="#"><img class="lazyload" data-sizes="auto" src="{{ Voyager::image( @$cat->banner1 )}}" data-src="{{ Voyager::image( @$cat->banner1 )}}" alt="banner1"></a>
																			<a href="#" class="title-submenu"></a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																						<?php $count=1; ?>
																						<?php $flag=0;?>
																						@for($i=0; $i < count($subCats); $i++)
																						@if($subCats[$i]->catId == $cat->id && $count<=4)
																						<?php $count++; ?>
																						<?php $next= $i;?>
																							<li style="text-align:center;">
																								<a href="{{url('view_subcategory/'. $subCats[$i]->id)}}"  class="main-menu">{{$subCats[$i]->name}}</a></li>
																						@endif
																						@endfor
																						@for($i=$next+1; $i< count($subCats); $i++)
																						@if($subCats[$i]->catId== $cat->id)
																						<?php $flag=1;?>
																						@endif
																						@endfor
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		
																	</div>
																	@endif

																	@if($total>4 && $total<=8)
																	<div class="row">
																		<div class="col-md-6">
																		<a href="#">
																			<img class="lazyload" data-sizes="auto" src="{{ Voyager::image( @$cat->banner1)}}" data-src="{{ Voyager::image( @$cat->banner1 )}}" alt="banner1"></a>
																			<a href="#" class="title-submenu"></a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																						<?php $count=1; ?>
																						<?php $flag=0;?>
																						@for($i=0; $i < count($subCats); $i++)
																						@if($subCats[$i]->catId == $cat->id && $count<=4)
																						<?php $count++; ?>
																						<?php $next= $i;?>
																							<li style="text-align:center;"><a href="{{url('view_subcategory/'. $subCats[$i]->id)}}"  class="main-menu">{{$subCats[$i]->name}}</a></li>
																						@endif
																						@endfor
																						@for($i=$next+1; $i< count($subCats); $i++)
																						@if($subCats[$i]->catId== $cat->id)
																						<?php $flag=1;?>
																						@endif
																						@endfor
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			@if($flag==1)
																			<a href="#"><img class="lazyload" data-sizes="auto" src="{{ Voyager::image( @$cat->banner2 )}}" data-src="{{ Voyager::image( @$cat->banner2 )}}" alt="banner1"></a>
																			@endif
																			<a href="#" class="title-submenu"></a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																						<?php $count=5; ?>
																						<?php $flag=0;?>
																						@for($i=$next+1; $i < count($subCats); $i++)
																						@if($subCats[$i]->catId == $cat->id && $count<=8)
																						<?php $count++; ?>
																						<?php $next= $i;?>
																							<li style="text-align:center;"><a href="{{url('view_subcategory/'. $subCats[$i]->id)}}"  class="main-menu">{{$subCats[$i]->name}}</a></li>
																						@endif
																						@endfor
																						@for($i=$next+1; $i< count($subCats); $i++)
																						@if($subCats[$i]->catId== $cat->id)
																						<?php $flag=1;?>
																						@endif
																						@endfor
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		
																	</div>
																	@endif

																	@if($total>8 && $total<=12)
																	<div class="row">
																		<div class="col-md-4">
																		<a href="#"><img class="lazyload" data-sizes="auto" src="{{ Voyager::image( @$cat->banner1 )}}" data-src="{{ Voyager::image( @$cat->banner1 )}}" alt="banner1"></a>
																			<a href="#" class="title-submenu"></a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																						<?php $count=1; ?>
																						<?php $flag=0;?>
																						@for($i=0; $i < count($subCats); $i++)
																						@if($subCats[$i]->catId == $cat->id && $count<=4)
																						<?php $count++; ?>
																						<?php $next= $i;?>
																							<li style="text-align:center;"><a href="{{url('view_subcategory/'. $subCats[$i]->id)}}"  class="main-menu">{{$subCats[$i]->name}}</a></li>
																						@endif
																						@endfor
																						@for($i=$next+1; $i< count($subCats); $i++)
																						@if($subCats[$i]->catId== $cat->id)
																						<?php $flag=1;?>
																						@endif
																						@endfor
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4">
																			@if($flag==1)
																			<a href="#"><img class="lazyload" data-sizes="auto" src="{{ Voyager::image( @$cat->banner2 )}}" data-src="{{ Voyager::image( @$cat->banner2 )}}" alt="banner1"></a>
																			@endif
																			<a href="#" class="title-submenu"></a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																						<?php $count=5; ?>
																						<?php $flag=0;?>
																						@for($i=$next+1; $i < count($subCats); $i++)
																						@if($subCats[$i]->catId == $cat->id && $count<=8)
																						<?php $count++; ?>
																						<?php $next= $i;?>
																							<li style="text-align:center;"><a href="{{url('view_subcategory/'. $subCats[$i]->id)}}"  class="main-menu">{{$subCats[$i]->name}}</a></li>
																						@endif
																						@endfor
																						@for($i=$next+1; $i< count($subCats); $i++)
																						@if($subCats[$i]->catId== $cat->id)
																						<?php $flag=1;?>
																						@endif
																						@endfor
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4">
																			@if($flag==1)
																			<a href="#"><img class="lazyload" data-sizes="auto" src="{{ Voyager::image( @$cat->banner3 )}}" data-src="{{ Voyager::image( @$cat->banner3 )}}" alt="banner1"></a>
																			@endif
																			<a href="#" class="title-submenu"></a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																						<?php $count=9; ?>
																						<?php $flag=0;?>
																						@for($i=$next+1; $i < count($subCats); $i++)
																						@if($subCats[$i]->catId == $cat->id && $count<=12)
																						<?php $count++; ?>
																						<?php $next= $i;?>
																							<li style="text-align:center;"><a href="{{url('view_subcategory/'. $subCats[$i]->id)}}"  class="main-menu">{{$subCats[$i]->name}}</a></li>
																						@endif
																						@endfor
																						@for($i=$next+1; $i< count($subCats); $i++)
																						@if($subCats[$i]->catId== $cat->id)
																						<?php $flag=1;?>
																						@endif
																						@endfor
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		
																	</div>
																	@endif

																	@if($total>12 && $total<=16)
																	<div class="row">
																		<div class="col-md-3">
																		<a href="#"><img class="lazyload" data-sizes="auto" src="{{ Voyager::image( @$cat->banner1 )}}" data-src="{{ Voyager::image( @$cat->banner1 )}}" alt="banner1"></a>
																			<a href="#" class="title-submenu"></a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																						<?php $count=1; ?>
																						<?php $flag=0;?>
																						@for($i=0; $i < count($subCats); $i++)
																						@if($subCats[$i]->catId == $cat->id && $count<=4)
																						<?php $count++; ?>
																						<?php $next= $i;?>
																							<li style="text-align:center;"><a href="{{url('view_subcategory/'. $subCats[$i]->id)}}"  class="main-menu">{{$subCats[$i]->name}}</a></li>
																						@endif
																						@endfor
																						@for($i=$next+1; $i< count($subCats); $i++)
																						@if($subCats[$i]->catId== $cat->id)
																						<?php $flag=1;?>
																						@endif
																						@endfor
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			@if($flag==1)
																			<a href="#"><img class="lazyload" data-sizes="auto" src="{{ Voyager::image( @$cat->banner2 )}}" data-src="{{ Voyager::image( @$cat->banner2 )}}" alt="banner1"></a>
																			@endif
																			<a href="#" class="title-submenu"></a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																						<?php $count=5; ?>
																						<?php $flag=0;?>
																						@for($i=$next+1; $i < count($subCats); $i++)
																						@if($subCats[$i]->catId == $cat->id && $count<=8)
																						<?php $count++; ?>
																						<?php $next= $i;?>
																							<li style="text-align:center;"><a href="{{url('view_subcategory/'. $subCats[$i]->id)}}"  class="main-menu">{{$subCats[$i]->name}}</a></li>
																						@endif
																						@endfor
																						@for($i=$next+1; $i< count($subCats); $i++)
																						@if($subCats[$i]->catId== $cat->id)
																						<?php $flag=1;?>
																						@endif
																						@endfor
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			@if($flag==1)
																			<a href="#"><img class="lazyload" data-sizes="auto" src="{{ Voyager::image( @$cat->banner3 )}}" data-src="{{ Voyager::image( @$cat->banner3 )}}" alt="banner1"></a>
																			@endif
																			<a href="#" class="title-submenu"></a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																						<?php $count=9; ?>
																						<?php $flag=0;?>
																						@for($i=$next+1; $i < count($subCats); $i++)
																						@if($subCats[$i]->catId == $cat->id && $count<=12)
																						<?php $count++; ?>
																						<?php $next= $i;?>
																							<li style="text-align:center;"><a href="{{url('view_subcategory/'. $subCats[$i]->id)}}"  class="main-menu">{{$subCats[$i]->name}}</a></li>
																						@endif
																						@endfor
																						@for($i=$next+1; $i< count($subCats); $i++)
																						@if($subCats[$i]->catId== $cat->id)
																						<?php $flag=1;?>
																						@endif
																						@endfor
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			@if($flag==1)
																			<a href="#"><img class="lazyload" data-sizes="auto" src="{{ Voyager::image( @$cat->banner4 )}}" data-src="{{ Voyager::image( @$cat->banner4 )}}" alt="banner1"></a>
																			@endif
																			<a href="#" class="title-submenu"></a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																						<?php $count=13; ?>
																						@for($i=$next+1; $i < count($subCats); $i++)
																						@if($subCats[$i]->catId == $cat->id && $count<=16)
																						<?php $count++; ?>
																							<li style="text-align:center;"><a href="{{url('view_subcategory/'. $subCats[$i]->id)}}"  class="main-menu">{{$subCats[$i]->name}}</a></li>
																						@endif
																						@endfor
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	@endif
																	
																</div>
															</div>
														</li>
														@endforeach
													</ul>
													
												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header center -->
			<!-- Header Bottom -->
			<div class="header-bottom compact-hidden">
				<div class="container">
					<div class="header-bottom-inner">
						<div class="row">
							<div class="header-bottom-left menu-vertical col-md-3 col-sm-2 col-xs-2">
								<div class="responsive so-megamenu megamenu-style-dev">
									<div class="so-vertical-menu no-gutter compact-hidden">
										<nav class="navbar-default">	
											<div class="container-megamenu vertical open">
												<div id="menuHeading">
													<div class="megamenuToogle-wrapper">
														<div class="megamenuToogle-pattern">
															<div class="container">
																<div>
																	<span></span>
																	<span></span>
																	<span></span>
																</div>
																Categories							
																<i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="navbar-header">
													<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
														<span class="icon-bar" style="width: 12px;"></span>
														<span class="icon-bar" style="width: 16px;"></span>
														<span class="icon-bar"></span>
													</button>	
												</div>
												<div class="vertical-wrapper" >
													<span id="remove-verticalmenu" class="fa fa-times"></span>
													<div class="megamenu-pattern">
														<div class="container">
															<ul class="megamenu">
																@foreach($cats as $cat)
																<li class="item-vertical style1 with-sub-menu hover">
																	<p class="close-menu"></p>
																	<a href="#" class="clearfix">
																		<strong>
																		<span>{{$cat->name}}</span>
																		<b class="fa fa-angle-right"></b>
																		</strong> 
																	</a>
																	<div class="sub-menu" data-subwidth="100" >
																		<div class="content" >
																			<div class="row">
																				<div class="col-sm-8">
																					<div class="categories ">
																						<div class="row">
																							
																							<div class="col-sm-12 static-menu">
																								<div class="menu">
																									<ul class="row">
																										@foreach($subCats as $subs)
																										@if($subs->catId == $cat->id)
																										<li class="col-sm-6">
																											<a href="{{url('view_subcategory/'. $subs->id)}}" class="main-menu">{{$subs->name}}</a>
																										</li>
																										@endif
																										@endforeach
																										
																									</ul>
																								</div>
																							</div>
																							
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-4">
																					<div class="row img-banner">
																						<a href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/demo/cms/img-static-megamenu-h.png" alt="banner"></a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</li>
																@endforeach
																
																
															</div>
														</div>
													</div>
												</div>
											</nav>
									</div>
								</div>
							</div>
							
							<!-- Main menu -->
							<div class="header-bottom-right col-md-9 col-sm-10 col-xs-10">
								<div class="col-lg-9 col-md-8 col-sm-7 col-xs-9 header_search">
									<!-- Search -->
									<div id="sosearchpro" class="search-pro">
										<form method="GET" action="/search">
											<div id="search0" class="search input-group">
												<div class="select_category filter_type  icon-select">
													<select class="no-border" name="category_id">
														<option value="0">All Category</option>
														@foreach($cats as $cat)
															<option value="{{$cat->name}}">{{$cat->name}}</option>
															@foreach($subCats as $subs)
															@if($subs->catId == $cat->id)
																<option value="{{$subs->name}}">
																	&nbsp;&nbsp;&nbsp;&nbsp;{{$subs->name}}
																</option>
															@endif
															@endforeach
														@endforeach
													</select>
												</div>	

												<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
												<span class="input-group-btn">
												<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
												</span>
											</div>
											<input type="hidden" name="route" value="product/search" />
										</form>
									</div>
									<!-- //end Search -->
								</div>
								<div class="block-cart">
									<!--cart-->
									<div class="shopping_cart pull-right">
										<div id="cart" class=" btn-group btn-shopping-cart">
											<a data-loading-text="Loading..." class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
												<div class="shopcart">
													<span class="handle pull-left"></span>
													<span class="text-shopping-cart hidden-xs">	My cart	</span>
													<span class="text-shopping-cart-mobi hidden-lg hidden-md hidden-sm ">
													  <i class="fa fa-cart-plus"></i>
													</span> 
												</div>
											</a>
											<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">							
												
												<li>
													<div>
														
														<p class="text-center"> 
															<a class="btn view-cart" href="/shoppingCart"><i class="fa fa-shopping-cart"></i>View Cart
															</a>&nbsp;&nbsp;&nbsp; 
															<a class="btn btn-mega checkout-cart" href="/wishlist"><i class="fa fa-heart"></i>My Wishlist
															</a> 
														</p>
													</div>
													<div>
														
														<p class="text-center"> 
															<a class="btn view-cart" href="/cart_checkout" 
																style="background: lightcoral;border: none;color: black;">
																<i class="fa fa-share"></i>Checkout
															</a>
															
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<!--//cart-->
								</div>
								<div class="header_custom_link hidden-xs">
									@if(isset($email))
									<ul>
										<li><a href="/logout"><i class="fa fa-user"></i> Logout</a></li>
									</ul>
									@else
									<ul>
										<li><a href="/login"><i class="fa fa-user"></i> Login</a></li>
									</ul>
									@endif
								</div>
							</div>
							<!-- //end Main menu -->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- //Header Container  -->
		<!-- Main Container  -->

        @yield("content")

		@yield("script")
		
		<!-- //Main Container -->

		<script type="text/javascript"><!--
			var $typeheader = 'header-home1';
			//-->
		</script>
		<!-- Footer Container -->
		<footer class="footer-container typefooter-1">
			<!-- FOOTER TOP -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="module social_block col-md-3 col-sm-12 col-xs-12" >
								<ul class="social-block ">
									<li class="facebook"><a class="_blank" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a class="_blank" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li class="rss"><a class="_blank" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
									<li class="google_plus"><a class="_blank" href="#" target="_blank"><i class="fa  fa-google-plus"></i></a></li>
									<li class="pinterest"><a class="_blank" href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
							<div class="module news-letter col-md-9 col-sm-12 col-xs-12">
								<div class="newsletter">
									<div class="title-block">
										<div class="page-heading">SIGN UP FOR OUR NEWSLETTER</div>
										<div class="pre-text">
											Duis at ante non massa consectetur iaculis id non tellus			
										</div>
									</div>
									<div class="block_content">
										<form method="" name="signup" id="signup" class="btn-group form-inline signup">
											<div class="form-group required send-mail">
												<div class="input-box">
													<input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
												</div>
												<div class="subcribe">
													<button class="btn btn-default btn-lg" type="submit" onclick="" name="submit">
														Subscribe						</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<!-- FOOTER CENTER -->
			<div class="footer-center">
				<div class="container content">
					<div class="row">
						<!-- BOX INFO -->
						<div class="col-md-3 col-sm-6 col-xs-12 collapsed-block footer-links box-footer">
							<div class="module ">
								<div class="content-block-footer">
									<div class="footer-logo">
										<a href="index.html"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
									</div>
									<p></p>
								</div>
							</div>				
						</div>
						<!-- BOX ACCOUT -->
						<div class="col-md-3 col-sm-6 box-account box-footer">
							<div class="module clearfix">
								<h3 class="modtitle">Our Company</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">Delivery</a></li>
										<li><a href="#">Legal notice</a></li>
										<li><a href="#">Secure payment</a></li>
										<li><a href="#">Contact us</a></li>
										<li><a href="#">Sitemap</a></li>
										<li><a href="#">Stores</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- BOX INFOMATION -->
						<div class="col-md-3 col-sm-6 box-information box-footer">
							<div class="module clearfix">
								<h3 class="modtitle">Information</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">Terms and condition of use</a></li>
										<li><a href="#">Environmental notice</a></li>
										<li><a href="#">Legal notice</a></li>
										<li><a href="#">Privacy</a></li>
										<li><a href="#">Revocation Terms</a></li>
										<li><a href="#">Shipping payment</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- BOX ABOUT -->
						<div class="col-md-3  col-sm-6 collapsed-block box-footer">
							<div class="module ">
								<h3 class="modtitle">About Us</h3>
								<div class="modcontent">
									<ul class="contact-address">
										<li><span class="fa fa-home"></span> Sankirtan Office, ISKCON Mayapur </li>
										<li><span class="fa fa-envelope"></span> Email: <a href="#">mayapuronlinestore@gmail.com</a></li>
										<li><span class="fa fa-phone">&nbsp;</span> +91-9434343222</li>
									</ul>
									<ul class="payment-method">
										<li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/demo/cms/payment/payment-1.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/demo/cms/payment/payment-2.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/demo/cms/payment/payment-3.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/demo/cms/payment/payment-4.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/demo/cms/payment/payment-5.png" alt="Payment"></a></li>
									</ul>
								</div>
							</div>				
						</div>
					</div>
				</div>
			</div>		
			<!-- FOOTER BOTTOM -->
			<div class="footer-bottom ">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						Mayapur © 2018 - 2019. Online Shopping Website. All Rights Reserved.				
						</div>
						<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
					</div>
				</div>
			</div>

		</footer>
		<!-- //end Footer Container -->

    </div>
	<!-- Social widgets -->
	<section class="social-widgets visible-lg">
		<ul class="items">
			<li class="item item-01 facebook"> <a href="php/facebook.php?account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>FACEBOOK</h5>
					</div>
					<div class="loading">
						<img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/lazy-loader.gif" alt="loader">
					</div>
				</div>
			</li>
			<li class="item item-02 twitter"> <a href="php/twitter.php?account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>TWITTER FEEDS</h5> 
					</div>
					<div class="loading">
						<img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/lazy-loader.gif" alt="loader">
					</div>
				</div>
			</li>
			<li class="item item-03 youtube"> <a href="php/youtubevideo.php?account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>YouTube</h5>
					</div>
					<div class="loading"> <img  class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/lazy-loader.gif" alt="loader"></div>
				</div>
			</li>
		</ul>
	</section>	<!-- End Social widgets -->
	
	<!-- Cpanel Block -->
	<div id="sp-cpanel_btn" class="isDown visible-lg">
		<i class="fa fa-cog fa-spin"></i>
	</div>		
	<div id="sp-cpanel" class="sp-delay">
		<h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-times"> </i></span></h2>
		<div id="sp-cpanel_settings">
			<div class="panel-group">
				<label>Color Scheme</label>
				<div class="group-schemes" >
					<a data-scheme="default" title="Orange"  data-toggle="tooltip" class="item_scheme selected"><span style="background: #ea3a3c;"></span></a>
					<a data-scheme="blue" title="Blue"  data-toggle="tooltip" class="item_scheme"><span style="background: #5f87d1;"></span></a>
					<a data-scheme="orange"  title="Orange"  data-toggle="tooltip" class="item_scheme"><span style="background: #F4A137;"></span></a>
					<a data-scheme="cyan" title="Cyan"  data-toggle="tooltip" class="item_scheme"><span style="background: #009688;"></span></a>
					<a data-scheme="green" title="Green" data-toggle="tooltip" class="item_scheme "><span style="background: #20bc5a;"></span></a>
					
				 </div>
			</div>
			
			<div class="panel-group ">
				<label>Header style</label>
				<div class="group-boxed">
					<select id="change_header_type" name="cpheaderstype" class="form-control" onchange="headerTypeChange(this.value);">
						<option value="header-home1" >Header 1</option>
						<option value="header-home2" >Header 2</option>
						<option value="header-home3" >Header 3</option>
						<option value="header-home4" >Header 4</option>
						<option value="header-home5" >Header 5</option>
						<option value="header-home6" >Header 6</option>
						<option value="header-home7" >Header 7</option>
						<option value="header-home8" >Header 8</option>
						<option value="header-home9" >Header 9</option>
						<option value="header-home10" >Header 10</option>
					</select>
				</div>
			</div>
			
			
			<div class="panel-group ">
				<label>Layout Box</label>
				<div class="group-boxed">
					<select id="cp-layoutbox" name="cplayoutbox" class="form-control" onchange="changeLayoutBox(this.value);">
						<option value="full">Wide</option>
						<option value="boxed">Boxed</option>
						<option value="iframed">Iframed</option>
						<option value="rounded">Rounded</option>
					</select>
				</div>
			</div>
			
			<div class="panel-group">
				<label>Body Image</label>
				
				<div class="group-pattern">
					<div data-pattern="28"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/28.png" alt="pattern 28"></div>
					<div data-pattern="29"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/29.png" alt="pattern 29"></div>
					<div data-pattern="30"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/30.png" alt="pattern 30"></div>
					<div data-pattern="31"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/31.png" alt="pattern 31"></div>
					<div data-pattern="32"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/32.png" alt="pattern 32"></div>
					<div data-pattern="33"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/33.png" alt="pattern 33"></div>
					<div data-pattern="34"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/34.png" alt="pattern 34"></div>
					<div data-pattern="35"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/35.png" alt="pattern 35"></div>
					<div data-pattern="36"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/36.png" alt="pattern 36"></div>
					<div data-pattern="37"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/37.png" alt="pattern 37"></div>
					<div data-pattern="38"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/38.png" alt="pattern 38"></div>
					<div data-pattern="39"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/39.png" alt="pattern 39"></div>
					<div data-pattern="40"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/40.png" alt="pattern 40"></div>
					<div data-pattern="41"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/41.png" alt="pattern 41"></div>
					<div data-pattern="42"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/42.png" alt="pattern 42"></div>
					<div data-pattern="43"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/43.png" alt="pattern 43"></div>
					<div data-pattern="44"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/44.png" alt="pattern 44"></div>
					<div data-pattern="45"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../image/theme/patterns/45.png" alt="pattern 45"></div>
				</div>
				<p class="label-sm">Background only applies for Boxed,Framed, Rounded Layout</p>
			</div>
			
			<div class="reset-group">
				<a href="/" class="btn btn-success " onclick="ResetAll()">Reset</a>
			</div>
			
		</div>
	</div>

	<link rel='stylesheet' property='stylesheet'  href='../css/themecss/cpanel.css' type='text/css' media='all' />
	
	<!-- Preloading Screen -->
	{{--<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	 </div>--}}
	<!-- End Preloading Screen -->
	
	<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="../js/themejs/libs.js"></script>
	<script type="text/javascript" src="../js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="../js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="../js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="../js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="../js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui/jquery-ui.min.js"></script>

	

	<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="../js/themejs/application.js"></script>
	<script type="text/javascript" src="../js/themejs/toppanel.js"></script>
	<script type="text/javascript" src="../js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="../js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="../js/themejs/cpanel.js"></script>
	<script type="text/javascript" src="../js/themejs/created.js"></script> 

	


	<script type="text/javascript">
		
	</script>
</body>
</html>