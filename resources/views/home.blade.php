@extends("layout.index")
@section("content")
<main id="content" class="page-main">
<meta name="csrf-token" content="{!! csrf_token() !!}">
			<!-- Block Spotlight1  -->
			<div class="so-spotlight1 ">
				<div class="container">
					<div class="row">
						<div id="yt_header_right" class="col-lg-offset-3 col-lg-9 col-md-12">
							<div class="slider-container "> 
								<div id="so-slideshow" class="">
									<div class="module slideshow no-margin">
										<div class="item">
											<a href="#"><img class="lazyload img-responsive" src="image/demo/slider/sl11/one.jpg" alt="slider1"></a>
											<div class="sohomeslider-description">
												<img class="image image-sl11 pos-right img-active" src="" alt="">
												<div class="text pos-right text-sl11">
													<h3 class="tilte modtitle-sl11  title-active">Mayapur Online Store</h3>
													<p class="des des-sl11 des-active"></p>      
												</div> 					
											</div>
										</div>
										<div class="item">
											<a href="#"><img src="image/demo/slider/sl12/two.jpg" alt="slider1"></a>
											<div class="sohomeslider-description">
												<img class="image image-sl12 pos-left img-active" src="" alt="">
												<div class="text pos-right text-sl12">
												<h3 class="tilte modtitle-sl12 title-active">OUR NEW RANGE OF</h3>
												<h4 class="titleh4 h4-active">Products</h4>
												<p class="des des-sl11 des-active">For All Age Group</p>   
												</div>    					
											</div>
										</div>
										<div class="item">
											<a href="#"><img class="lazyload img-responsive" src="image/demo/slider/sl13/22.jpg" alt="slider1"></a>
											<div class="sohomeslider-description">
												<img class="image image-sl13 pos-right img-active" src="" alt="">
												<div class="text pos-left text-sl13">
													<h3 class="tilte modtitle-sl13 title-active">OUR NEW RANGE OF</h3>
													<h4 class="titleh4 h4-active">Dieties</h4>   
												</div>  					
											</div>
										</div>
									</div>
									{{--<div class="loadeding"></div>--}}

								</div>
							</div>
						</div>
					</div>
					<div class="block-banner banners banner-sn-1 wow fadeInUp">
						<div class="img-1 banner1-1">
							<a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/m1.jpg" alt="Static Image"></a>
						</div>
						<div class="img-1 banner1-2">
							<a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/m2.jpg" alt="Static Image"></a>
						</div>
						<div class="img-1 banner1-3">
							<a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/m3.jpg" alt="Static Image"></a>
						</div>
						<div class="img-1 banner1-4">
							<a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/m4.jpg" alt="Static Image"></a>
						</div>
					</div>
				</div>  
			</div>
			<!-- Block Spotlight2  -->
			<div class="so-spotlight2 ">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-sm-8 col-xs-12">
							<!-- DEAL -->
							<div class="module so-deals">
								<h3 class="modtitle"><span>Hot Deals</span></h3>
								<div class="modcontent">
								    <div id="so_deals_14513931681482050581" class="so-deal modcontent products-list grid clearfixbutton-type1 style2">
							        	<div class="extraslider-inner product-layout deal-slider"> 
										  	@foreach($hotdeals as $prod)
											<div class="product-thumb transition product-item-container">
												<div class="left-block">
													<div class="product-image-container">
														<div class="image">
															<span class="label label-sale">Sale</span>
															<a class="lt-image" href="{{url('view_product/'. $prod->id)}}" target="_self">
																<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/six.jpg" alt="Apple Cinema 30" title="Juren tima chuk"/>
																<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/four.jpg" alt="Apple Cinema 30" title="Juren tima chuk"/>
															</a>
														</div>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
														<div class="rating">
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														</div>
														<h4><a href="{{url('view_product/'. $prod->id)}}" target="_self" title="Juren tima chuk..">{{$prod->name}}</a></h4>
														<p class="price">
														<span class="price-new">{{$prod->price}}</span> <span class="price-old">Rs. 122.00</span>
														</p>							
													</div>	
												</div>
												<!-- End right block -->
											</div>
											@endforeach	
										</div>
									</div>
								    
								</div><!--/.modcontent-->
							</div>	
							<!-- END DEAL -->
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<!-- MODULE BESTSELER -->
							<div class="moduletable module best-seller">
								<h3 class="modtitle"><span>Best Sellers</span></h3>
								<div id="sp_extra_slider_20796849091482058205" class="so-extraslider">
									<div class="extraslider-inner best-seller-slider">
										<div class="item ">
										<?php $count=1; ?>
										@for ($i = 0; $i < count($bestdeals) && $count<=3 ; $i++)
											<?php $count++; ?>
											<div class="item-wrap style1">
												<div class="item-wrap-inner media">
													<div class="media-left">
														<div class="item-image">
															<div class="item-img-info">
															<a href="{{url('view_product/'. $bestdeals[$i]->id)}}" class="lt-image" target="_self" title="Bikum masen dumas">
																<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/four.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
																<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/eight.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
															</a>
															</div>
														</div>
													</div>
													<div class="media-body">
														<div class="item-info">
															<div class="rating">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
															<div class="item-title">
																<a href="{{url('view_product/'. $bestdeals[$i]->id)}}" target="_self" title="Bikum masen dumas">
																	{{$bestdeals[$i]->name}}
																</a>
															</div>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="content_price">
																	<span class="price product-price">	Rs. 122.00	</span>
																</div>
															</div>
															<!-- End item-content -->
														</div>
													</div><!-- End item-info -->
												</div>
												<!-- End item-wrap-inner -->
											</div>
										@endfor
											<!-- End item-wrap -->													
										</div>
										<div class="item ">
										<?php $count=4 ?>
										@for ($i = 3; $i < count($bestdeals) && $count<=6 ; $i++)
											<?php $count++; ?>
											<div class="item-wrap style1">
												<div class="item-wrap-inner media">
													<div class="media-left">
														<div class="item-image">
															<div class="item-img-info">
															<a href="{{url('view_product/'. $bestdeals[$i]->id)}}" class="lt-image" target="_self" title="Bikum masen dumas">
																<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/four.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
																<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/eight.jpg" alt="Apple Cinema 30" title="Apple Cinema 30&quot;"/>
															</a>
															</div>
														</div>
													</div>
													<div class="media-body">
														<div class="item-info">
															<div class="rating">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
															<div class="item-title">
																<a href="{{url('view_product/'. $bestdeals->id)}}" target="_self" title="Bikum masen dumas">
																	{{$bestdeals[$i]->name}}
																</a>
															</div>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="content_price">
																	<span class="price product-price">	Rs. 122.00	</span>
																</div>
															</div>
															<!-- End item-content -->
														</div>
													</div><!-- End item-info -->
												</div>
												<!-- End item-wrap-inner -->
											</div>
										@endfor
											
											<!-- End item-wrap -->													
										</div>
									</div>
								</div>
							</div>
							<!-- END  -->
						</div>
					</div>
				</div>  
			</div>
			<!-- Block Spotlight3  -->
			<div class="so-spotlight3">
				<div class="container">
					<!-- Mod Supercategory 1 -->
					<div class="module cus-style-supper-cate supper1">
						<div class="header">
							 <h3 class="modtitle">
								<strong class="line-color"></strong>
							</h3>
							
						</div>
						
						<div id="so_super_category_1" class="so-sp-cat first-load">
							<div class="spcat-wrap ">
								<div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
									<!--Begin Tabs-->
									    <div class="spcat-tabs-wrap">
									        <span class="spcat-tab-selected">	Rating	</span>
									        <span class="spcat-tab-arrow">▼</span>
									        <ul class="spcat-tabs cf">
					                            <li class="spcat-tab  tab-sel tab-loaded" data-active-content=".items-category-sales" data-field_order="sales">
													<span class="spcat-tab-label">Sale</span>
								                </li>
								                <li class="spcat-tab " data-active-content=".items-category-p_sort_order" data-field_order="p_sort_order">
													<span class="spcat-tab-label">Price</span>
								                </li>
								                <li class="spcat-tab" data-active-content=".items-category-rating" data-field_order="rating">
													<span class="spcat-tab-label">Rating</span>
								                </li>
								                
						                    </ul>
									    </div>
									<!-- End Tabs-->
								</div>
								<div class="main-left">
									<div class="banner-post-text">
										 <a href="#" title="banner"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/s22.jpg" alt="banner">  </a>                        				
									</div>
									<div class="hot-category">
										<div class="category-wrap-cat">
								            <div class="title-imageslider  sp-cat-title-parent">
											 Hot Categories        </div>
								   
								            <div id="cat_slider_3" class="slider">
												<div class="cat_slider_inner so_category_type_default">
													@foreach($cats as $cat)
													<div class="item">
								                        <div class="item-inner">
									                        <div class="cat_slider_title">
																		
									                            <a href="{{url('view_category/'. $cat->id)}}" title="Tange manue" target="_self">
									                                       <i class="fa fa-caret-right"></i> {{$cat->name}} </a>
									                        </div>
								                        </div>
								                    </div>
													@endforeach
								            	</div>
											</div>
										</div>
									</div>
								</div>
								<div class="main-right">
									<div class="banner-pre-text">
										<a href="#" title="banner">   <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/g44.jpg" alt="banner"></a>               				
									</div>
																		
									<div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->
										<div class="spcat-items spcat-items-loaded items-category-sales product-layout spcat-items-selected" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
												<?php $count=1 ?>
												@for ($i = 0; $i < count($featured) && $count<=6 ; $i++)
												
													<?php $count++; ?>
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="{{url('view_product/'. $featured[$i]->id)}}" target="_self" title="Verty nolen max..">
																			<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b5.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																			<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																		</a>
																	</div>				
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="{{url('view_product/'. $featured[$i]->id)}}" title="Verty nolen max.." target="_self">
																		   {{$featured[$i]->name}}						
																		</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">{{$featured[$i]->price}}</span> <span class="price-old">Rs. 69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
															
																<button class="wishlist btn-button" type="submit" data-toggle="tooltip" title="Add to Wish List" onclick="wishAdd({{$featured[$i]->id}})"><i class="fa fa-heart"></i></button>															
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cartAdd({{$featured[$i]->id}});"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																{{--<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>--}}
															</div>
														</div>
					    							</div>
												@endfor	
												</div>
											</div>
										</div>
										<div class="spcat-items spcat-items-loaded items-category-p_sort_order product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
												<?php 
													$featuredSort = collect($featured)->sortBy('price')->toArray();
													$featured= $featured->toArray();
													usort($featured, function ($a, $b) {
														return ($a['price'] < $b['price']) ? -1 : 1;
													});
												?>				
												<?php $count=1 ?>
												@for ($i = 0; $i < count($featured) && $count<=6 ; $i++)
													<?php $count++; ?>
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="{{url('view_product/'. $featured[$i]['id'])}}" target="_self" title="Verty nolen max..">
																			<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b5.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																			<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																		</a>
																	</div>				
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="{{url('view_product/'. $featured[$i]['id'])}}" title="Verty nolen max.." target="_self">
																		   {{$featured[$i]['name']}}						
																		</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">{{$featured[$i]['price']}}</span> <span class="price-old">Rs. 69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishAdd({{$featured[$i]['id']}})"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cartAdd({{$featured[$i]['id']}});"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																{{--<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>--}}
															</div>
														</div>
					    							</div>
												@endfor		
					    							
												</div>
											</div>
										</div>
										<div class="spcat-items spcat-items-loaded items-category-rating product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">				
												<?php $count=1 ?>
												@for ($i = 0; $i < count($featured) && $count<=6 ; $i++)
													<?php $count++; ?>
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="{{url('view_product/'. $featured[$i]['id'])}}" target="_self" title="Verty nolen max..">
																			<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b5.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																			<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b7.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																		</a>
																	</div>				
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="{{url('view_product/'. $featured[$i]['id'])}}" title="Verty nolen max.." target="_self">
																		   {{$featured[$i]['name']}}						
																		</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">Rs. 45.00</span> <span class="price-old">Rs. 69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishAdd({{$featured[$i]['id']}})"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cartAdd({{$featured[$i]['id']}});"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																{{--<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>--}}
															</div>
														</div>
					    							</div>
												@endfor		
												</div>
											</div>
										</div>
										
									</div>
									<!--End Items-->
								</div>
								
								
							</div>
						</div>
					</div>
					<!-- End Mod -->
					<!-- Banner Content1 -->
					<div class="module banner">
						<div class="banners">
							<div><a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/m5.jpg" alt="Static Image"></a></div>
						</div>
					</div>
					<!-- End Banner -->
					<!-- Mod Supercategory 2 -->
					<div class="module cus-style-supper-cate supper3">
						<div class="header">
								<h3 class="modtitle">
								<span class="icon-color">
									<i class="fa fa-mobile"></i>
										Our Specials
									<small class="arow-after"></small>
								</span>
								<strong class="line-color"></strong>
							</h3>
							
						</div>
						
						<div id="so_super_category_2" class="so-sp-cat first-load">
							<div class="spcat-wrap ">
								<div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
									<!--Begin Tabs-->
									    <div class="spcat-tabs-wrap">
									        <span class="spcat-tab-selected">	Rating	</span>
									        <span class="spcat-tab-arrow">▼</span>
									    </div>
									<!-- End Tabs-->
								</div>
								<div class="main-left">
									<div class="banner-post-text">
										 <a href="#" title="banner"> <img src="image/demo/banner/s21.jpg" alt="banner">  </a>                        				
									</div>
									<div class="hot-category">
										<div class="category-wrap-cat">
								            <div class="title-imageslider  sp-cat-title-parent">
											 Hot Categories        </div>
								   
								            <div id="cat_slider_2" class="slider">
												<div class="cat_slider_inner so_category_type_default">
													@foreach($cats as $cat)
													<div class="item">
								                        <div class="item-inner">
									                        <div class="cat_slider_title">
																		
									                            <a href="{{url('view_category/'. $cat->id)}}" title="Tange manue" target="_self">
									                                       <i class="fa fa-caret-right"></i> {{$cat->name}} </a>
									                        </div>
								                            
								                        </div>
								                    </div>
													@endforeach
								                    
								            	</div>
											</div>
										</div>
									</div>
								</div>
								<div class="main-right">
									<div class="banner-pre-text">
										<a href="#" title="banner">   <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/t21.jpg" alt="banner"></a>               				
									</div>
																		
									<div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->	
										<div class="spcat-items spcat-items-loaded items-category-rating product-layout spcat-items-selected" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
												<?php $count=1 ?>
												@for ($i = 0; $i < count($allProds) && $count<=6 ; $i++)
													<?php $count++; ?>
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="{{url('view_product/'. $allProds[$i]->id)}}" target="_self" title="Verty nolen max..">
																			<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																			<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/t3.jpg" alt="Apple Cinema 30" title="Emdcu meagi"/>
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Loved</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="{{url('view_product/'. $allProds[$i]->id)}}" title="Emdcu meagi" target="_self">
																		  {{$allProds[$i]->name}}							
																		</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">{{$allProds[$i]->price}}</span><span class="price-old">Rs. 159.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishAdd({{$allProds[$i]->id}})"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cartAdd({{$allProds[$i]->id}});"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																{{--<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>--}}
															</div>
														</div>
					    							</div>
												@endfor
												</div>
											</div>
										</div>
									</div>
									<!--End Items-->
								</div>
								
								
							</div>
						</div>
					</div>
					<!-- End Mod -->
					<!-- Banner Content2 -->
					<div class="module banner">
						<div class="banners">
							<div><a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/m7.jpg" alt="Static Image"></a></div>
						</div>
					</div>
					<!-- End Banner -->
					<!-- Mod Supercategory 3 -->
					<div class="module cus-style-supper-cate supper3">
						<div class="header">
								<h3 class="modtitle">
								<span class="icon-color">
									<i class="fa fa-futbol-o "></i>
									New Launches			
									<small class="arow-after"></small>
								</span>
								<strong class="line-color"></strong>
							</h3>
							
						</div>
						
						<div id="so_super_category_3" class="so-sp-cat first-load">
							<div class="spcat-wrap ">
								<div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
									<!--Begin Tabs-->
									    <div class="spcat-tabs-wrap">
									        <span class="spcat-tab-selected">	Rating	</span>
									        <span class="spcat-tab-arrow">▼</span>
									        
									    </div>
									<!-- End Tabs-->
								</div>
								<div class="main-left">
									<div class="banner-post-text">
										 <a href="#" title="banner"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/banner/s23.jpg" alt="banner">  </a>                        				
									</div>
									<div class="hot-category">
										<div class="category-wrap-cat">
								            <div class="title-imageslider  sp-cat-title-parent">
											 Hot Categories        </div>
								   
								            <div id="cat_slider_1" class="slider">
												<div class="cat_slider_inner so_category_type_default">
													@foreach($cats as $cat)
													<div class="item">
								                        <div class="item-inner">
									                        <div class="cat_slider_title">
									                            <a href="{{url('view_category/'. $cat->id)}}" title="Tange manue" target="_self">
									                                       <i class="fa fa-caret-right"></i> {{$cat->name}} </a>
									                        </div>
								                        </div>
								                    </div>
													@endforeach
								            	</div>
											</div>
										</div>
									</div>
								</div>
								<div class="main-right">
									<div class="banner-pre-text">
										<a href="#" title="banner">   <img src="image/demo/banner/t23.jpg" alt="banner"></a>               				
									</div>
																		
									<div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->
										<div class="spcat-items spcat-items-loaded items-category-p_price product-layout spcat-items-selected" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
												<?php $count=1 ?>
												@for ($i = 0; $i < count($allProds) && $count<=6 ; $i++)
													<?php $count++; ?>
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="{{url('view_product/'. $allProds[$i]->id)}}" target="_self" title="Verty nolen max..">
																			<img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/e10.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																			<img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/eight.jpg" alt="Apple Cinema 30" title="Verty nolen laben"/>
																		</a>
																	</div>				
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="{{url('view_product/'. $allProds[$i]->id)}}" title="Verty nolen max.." target="_self">
																			{{$allProds[$i]->name}}
																		</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">{{$allProds[$i]->price}}</span> <span class="price-old">Rs. 69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishAdd({{$allProds[$i]->id}})"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cartAdd({{$allProds[$i]->id}});"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																{{--<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>--}}
															</div>
														</div>
					    							</div>				
												@endfor	
												</div>
											</div>
										</div>
									</div>
									<!--End Items-->
								</div>
							</div>
						</div>
					</div>
					<!-- End Mod -->
				</div>	
			</div>
			<!--Block Spotlight4  -->
			<div class="so-spotlight4">
				<div class="container">
					<div class="row">
						<div class="module so-latest-blog latest-blog col-md-4 col-sm-6 col-xs-12">
							<h3 class="modtitle"><span>News Updates</span></h3>
							<div id="so_latest_blog_180" class="so-blog-external button-type2 button-type2">
								<div class="blog-external-simple">
									<div class="media">
										<div class="item">
											<div class="media-body">

												<div class="media-date-added">28<br>
													<span>Mar</span>
												</div>
												<div class="media-content">
													<h4 class="media-heading">
													<a href="blog-detail.html" title="Ac tincidunt Suspendisse malesuada" target="_blank">Pellentse tincidunt Suspendis malesu</a>
													</h4>
													<div class="description">
													Commodo laoreet semper tincidunt lorem Vestibulum nunc at In 
													Curabitur magna.....
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="item">
											<div class="media-body">

												<div class="media-date-added">01<br>
													<span>Sep</span>
												</div>
												<div class="media-content">
													<h4 class="media-heading">
													<a href="blog-detail.html" title="Biten demonstraverunt lector legere legunt saepius" target="_blank">Biten demonst raverunt lector legere </a>
													</h4>
													<div class="description">
													Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Eu.....
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="bestseller col-md-4 col-sm-6 col-xs-12">
							<div class="bestseller-inner">
								<div>
									<h3>Bestsellers</h3>
									<div class="product-layout ">
										<div class="product-thumb transition">
											<div class="image"><a href="product.html"><img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b1.jpg"  title="Duidem rerum facilis" alt="Apple Cinema 30" /></a></div>
											<div class="caption">
												<div class="rating">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html">Fuzan Sumata masen itcute</a></h4>

												<p class="price">
												<span class="price-new"> Rs. 88.00</span>
												<span class="price-old">Rs. 129.00</span>
												</p>
											</div>
										</div>
									</div>
									<div class="product-layout ">
										<div class="product-thumb transition">
											<div class="image"><a href="product.html"><img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/shop/product/b2.png"  title="Duidem rerum facilis" alt="Apple Cinema 30" /></a></div>
											<div class="caption">
												<div class="rating">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html">Duidem gokensie rerum facilis</a></h4>

												<p class="price">
												<span class="price-new"> Rs. 123.00</span>
												<span class="price-old">Rs. 159.00</span>
												</p>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="module testimonial col-md-4 col-sm-12 col-xs-12">
						    <div class="clients_say">
							    <div class="block-title"><h3>Testimonial</h3></div>
								<div class="slider-clients-say">
									<div class="block_content">
										<div class="image"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/clients_say.png" alt="">
										</div>
										<div class="block-info">
											<div class="text">"Aliquam ut tellus dignissim, cursus erat ultricies tellus cursus erat ultricies tellus.. Nulla tempus sollicitudin mauris cursus dictum. Commodo laoreet semper lorem."</div>
											<div class="info">
												<div class="author">- BonBon Supper</div>
											</div>
										</div>
									</div>
									<div class="block_content">
										<div class="image"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/cms/clients_say.png" alt="">
										</div>
										<div class="block-info">
											<div class="text">"Dignissim ut tellus Aliquam, cursus erat ultricies tellus cursus erat ultricies tellus.. Nulla tempus sollicitudin mauris cursus dictum. Commodo laoreet semper  lorem."</div>
											<div class="info">
												<div class="author">- Aliquam Tellus</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Block Spotlight5  -->
			<div class="so-spotlight5">
				<div class="container">
					<div class="block-brand">
						<div class="brand-slider">
							<div class="item-manu">
								<a href="#" title="Link">
									<img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/2.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/3.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/4.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/5.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/2.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/3.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img  class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/demo/brands/9.jpg" alt="img">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
</main >

@endsection

@section("script")

@endsection