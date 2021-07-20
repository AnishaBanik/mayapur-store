@extends("layout.index")
@section("content")
<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">{{$product->name}}</a></li>
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
                
				<div id="content" class="col-md-12 col-sm-12">
					
					<div class="product-view row">
						<div class="left-content-product col-lg-12 col-xs-12">
							<div class="row">
                                <div class="content-product-left  col-sm-3 col-xs-12">
                                </div>
								<div class="content-product-left  col-sm-6 col-xs-12 ">
									<div id="thumb-slider-vertical" class="thumb-vertical-outer">
										<span class="btn-more prev-thumb nt"><i class="fa fa-chevron-up"></i></span>
										<span class="btn-more next-thumb nt"><i class="fa fa-chevron-down"></i></span>
										<ul class="thumb-vertical">
											@foreach($pieces as $image)
											<li class="owl2-item">
												<a data-index="0" class="img thumbnail" data-image="{{Voyager::image($image)}}" title="Canon EOS 5D">
													<img src="{{Voyager::image($image)}}" title="Canon EOS 5D" alt="Canon EOS 5D">
												</a>
											</li>
											@endforeach
										</ul>
										
										
									</div>
									<div class="large-image  vertical">
										<img itemprop="image" class="product-image-zoom" src="{{Voyager::image($pieces[0])}}" data-zoom-image="{{Voyager::image($pieces[0])}}" title="Bint Beef" alt="Bint Beef">
									</div>
									<a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a>
									
								</div>

								<div class="content-product-right col-sm-3 col-xs-12">
									<div class="title-product">
										<h1>{{$product->name}}</h1>
									</div>
									<!-- Review ---->
									<div class="box-review form-group">
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>

										<a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>	| 
										<a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
									</div>

									<div class="product-label form-group">
										<div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div>
										<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
											<span class="price-new" itemprop="price">Rs. {{$product->price}}</span>
											<span class="price-old">$122.00</span>
										</div>
										
									</div>

									<div class="product-box-desc">
										<div class="inner-box-desc">
											<div class="price-tax"><span>Ex Tax:</span> $60.00</div>
											<div class="brand"><span>Brand:</span><a href="#">Apple</a>		</div>
											<div class="model"><span>Product Code:</span> Product 15</div>
											<div class="reward"><span>Reward Points:</span> 100</div>
										</div>
									</div>


									<div id="product">
										<div class="form-group box-info-product">
											<div class="option quantity">
												<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
													<label>Qty</label>
													<input class="form-control" type="text" name="quantity"
													value="1">
													<input type="hidden" name="product_id" value="50">
													<span class="input-group-addon product_quantity_down">−</span>
													<span class="input-group-addon product_quantity_up">+</span>
												</div>
											</div>
											<div class="cart">
												<input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Add to Cart">
											</div>
											<div class="add-to-links wish_comp">
												<ul class="blank list-inline">
													<li class="wishlist">
														<a class="icon" data-toggle="tooltip" title=""
														onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
														</a>
													</li>
													{{--<li class="compare">
														<a class="icon" data-toggle="tooltip" title=""
														onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
														</a>
													</li>--}}
												</ul>
											</div>

										</div>

									</div>
									<!-- end box info product -->
								</div>
							</div>
						</div>
					</div>
					<div class="bototm-detail">
						<div class="row">
							<div class="col-lg-3 col-md-4  col-xs-12">
								<div class="module releate-horizontal">
						            <h3 class="modtitle"><span>Related Products</span></h3>
						            <div class="releate-product ">
										<div class="product-item-container">
											<?php $count=1; ?>
											@foreach($related as $prod)
											@if($prod->id != $product->id && $count<=4)
											<?php $count++; ?>
											<div class="item-element clearfix">
												<div class="image">
												<a href="{{url('view_product/'. $prod->id)}}">
													<img  src="../image/demo/shop/product/1.png"  title="Teserunt hlitia" class="img-1 img-responsive" />
												</a>
												</div> 
												<div class="caption">
													
													<div class="ratings">
														  <div class="rating-box">
														  <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														  </div>
													</div>
													<h4><a href="{{url('view_product/'. $prod->id)}}">{{$prod->name}}</a></h4>
													<div class="price">
														<span class="price-new">Rs. {{$prod->price}}</span> 
														<span class="price-old">$142.00</span>		 
													</div>
													
												</div>
										    </div>
											@endif
											@endforeach	
											
										    
										</div>
						            </div>
							    </div>

							</div>
							<div class="col-lg-9 col-md-8  col-xs-12">
								<!-- Product Tabs -->
								<div class="producttab ">
									<div class="tabsslider  col-xs-12">
										<ul class="nav nav-tabs">
											<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
											<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
											<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews</a></li>
											<li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Post Review</a></li>
										</ul>
										<div class="tab-content col-xs-12">
											<div id="tab-1" class="tab-pane fade active in">
												{!! $product->details !!}
											</div>
											<div id="tab-review" class="tab-pane fade">
												<form>
													<div id="review">
														@foreach($revs as $rev)
														<table class="table table-striped table-bordered">
															<tbody>
																<tr>
																	<td style="width: 50%;"><strong>{{$rev->name}}</strong></td>
																	<td class="text-right">{{date('d-m-Y', strtotime($rev->created_at))}}</td>
																</tr>
																<tr>
																	<td colspan="2">
																		<p>{{$rev->comment}}</p>
																		<div class="ratings">
																			<div class="rating-box">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
														@endforeach
														
														<div class="text-right"></div>
													</div>
													
												</form>
											</div>
											<div id="tab-4" class="tab-pane fade">
												{{@$product->tags}}			
											</div>
											<div id="tab-5" class="tab-pane fade">
												<h2 id="review-title">Write a review</h2>
												<form action="/post_review" method="post">
													@csrf
													<div class="form-group" style="display:none;">
														<input type="text" class="form-control" id="prod" name="prod" value="{{$product->id}}">
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Your Name</label>
														<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Your Review</label>
														<textarea class="form-control" id="text" name="text" rows="3">Tell us your feedback</textarea>
													</div>
													
													<button type="submit" class="btn btn-primary">Submit Feedback</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- //Product Tabs -->
								<!-- Upsell Products -->
								<div class="related upsell titleLine products-list grid module ">
									<h3 class="modtitle"><span>Upsell Products</span></h3>
									<div class="upsell-products ">
										@foreach($upsell as $ups)
										<div class="product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="product-image-container second_img ">
													<a href="{{url('view_product/'. $ups->id)}}">
														<img  src="../image/demo/shop/product/e11.jpg"  title="Apple Cinema 30&quot;" class="img-1 img-responsive" />
														<img  src="../image/demo/shop/product/e12.jpg"  title="Apple Cinema 30&quot;" class="img-2 img-responsive" />
													</a>
													</div>
												</div>
												<div class="button-group">
													<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
													<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
													{{--<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
													<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>--}}
												</div>
												
												<div class="right-block">
													<div class="caption">
														<h4><a href="{{url('view_product/'. $ups->id)}}">{{$ups->name}}</a></h4>		
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
																			
														<div class="price">
															<span class="price-new">Rs. {{$ups->price}}</span> 
															<span class="price-old">$122.00</span>		 
															<span class="label label-percent">-40%</span>    
														</div>
														<div class="description item-desc hidden">
															<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
														</div>
													</div>
												</div><!-- right block -->

											</div>
										</div>
										@endforeach	
									</div>
								</div>
							</div>
						</div>
					</div>
					

					

					
				</div>
				
				
			</div>
			<!--Middle Part End-->
</div>
@endsection
@section("script")
<script type="text/javascript" src="../js/themejs/so_megamenu.js"></script>
<script type="text/javascript">
						$(document).ready(function() {
							var zoomCollection = '.large-image img';
							$( zoomCollection ).elevateZoom({
								zoomType    : "inner",
								lensSize    :"200",
								easing:true,
								gallery:'thumb-slider-vertical',
								cursor: 'pointer',
								galleryActiveClass: "active"
							});
							$('.large-image').magnificPopup({
								items: [
									{src: 'image/demo/shop/product/1.png' },
									{src: 'image/demo/shop/product/f9.jpg' },
									{src: 'image/demo/shop/product/2.png' },
									{src: 'image/demo/shop/product/3.png' },
									{src: 'image/demo/shop/product/j9.jpg' },
								],
								gallery: { enabled: true, preload: [0,2] },
								type: 'image',
								mainClass: 'mfp-fade',
								callbacks: {
									open: function() {
										
										var activeIndex = parseInt($('#thumb-slider-vertical .img.active').attr('data-index'));
										var magnificPopup = $.magnificPopup.instance;
										magnificPopup.goTo(activeIndex);
									}
								}
							});
							$("#thumb-slider-vertical .owl2-item").each(function() {
								$(this).find("[data-index='0']").addClass('active');
							});
							
							$('.thumb-video').magnificPopup({
							  type: 'iframe',
							  iframe: {
								patterns: {
								   youtube: {
									  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
									  id: 'v=', // String that splits URL in a two parts, second part should be %id%
									  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
										},
									}
								}
							});
							
							$('.product-options li.radio').click(function(){
								$(this).addClass(function() {
									if($(this).hasClass("active")) return "";
									return "active";
								});
								
								$(this).siblings("li").removeClass("active");
								$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
							});
							
							var _isMobile = {
							  iOS: function() {
							   return navigator.userAgent.match(/iPhone/i);
							  },
							  any: function() {
							   return (_isMobile.iOS());
							  }
							};
							
							$(".thumb-vertical-outer .next-thumb").click(function () {
								$( ".thumb-vertical-outer .lSNext" ).trigger( "click" );
							});
			
							$(".thumb-vertical-outer .prev-thumb").click(function () {
								$( ".thumb-vertical-outer .lSPrev" ).trigger( "click" );
							});

							$(".thumb-vertical-outer .thumb-vertical").lightSlider({
								item: 4,
								autoWidth: false,
								vertical:true,
								slideMargin: 7,
								verticalHeight:425,
					            pager: false,
								controls: true,
					            prevHtml: '<i class="fa fa-chevron-up"></i>',
					            nextHtml: '<i class="fa fa-chevron-down"></i>',
								responsive: [
									{
										breakpoint: 1199,
										settings: {
											verticalHeight: 330,
											item: 4,
										}
									},
									{
										breakpoint: 1024,
										settings: {
											verticalHeight: 235,
											item: 2,
											slideMargin: 5,
										}
									},
									{
										breakpoint: 768,
										settings: {
											verticalHeight: 340,
											item: 3,
										}
									}
									,
									{
										breakpoint: 480,
										settings: {
											verticalHeight: 100,
											item: 1,
										}
									}
					
								]
								
					        });
			
							
							
							// Product detial reviews button
							
						});
							
</script>
@endsection