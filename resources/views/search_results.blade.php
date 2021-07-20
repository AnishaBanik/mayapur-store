@extends("layout.index")
@section("content")
<meta name="csrf-token" content="{!! csrf_token() !!}">
<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Search Results</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-md-9 col-sm-8">
				<div class="products-category">
					<div class="category-derc">
						<div class="row">
                            <div class="col-sm-4">
                            </div>
							<div class="col-sm-8">
								<div class="banners">
									<div>
										<a  href="#"><img src="../image/demo/shop/category/electronic-cat.png" alt="Apple Cinema 30&quot;"><br></a>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					<!-- Filters -->
					<div class="product-filter filters-panel">
						<div class="row">
							<div class="col-md-2 visible-lg">
								<div class="view-mode">
									<div class="list-view">
										<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
										<button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
									</div>
								</div>
							</div>
							<div class="short-by-show form-inline text-right col-md-7 col-sm-8 col-xs-12">
								{{--<div class="form-group short-by">
									<label class="control-label" for="input-sort">Sort By:</label>
									<select id="input-sort" class="form-control"
									onchange="location = this.value;">
										<option value="" selected="selected">Default</option>
										<option value="">Name (A - Z)</option>
										<option value="">Name (Z - A)</option>
										<option value="">Price (Low &gt; High)</option>
										<option value="">Price (High &gt; Low)</option>
										<option value="">Rating (Highest)</option>
										<option value="">Rating (Lowest)</option>
										<option value="">Model (A - Z)</option>
										<option value="">Model (Z - A)</option>
									</select>
								</div>--}}
								{{--<div class="form-group">
									<label class="control-label" for="input-limit">Show:</label>
									<select id="input-limit" class="form-control" onchange="location = this.value;">
										<option value="" selected="selected">9</option>
										<option value="">25</option>
										<option value="">50</option>
										<option value="">75</option>
										<option value="">100</option>
									</select>
								</div>--}}
							</div>
							{{--<div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
								<ul class="pagination">
									<li class="active"><span>1</span></li>
									<li><a href="">2</a></li><li><a href="">&gt;</a></li>
									<li><a href="">&gt;|</a></li>
								</ul>
							</div>--}}
						</div>
					</div>
					<!-- //end Filters -->
					<!--changed listings-->
					<div class="products-list row grid">
                        @foreach($finalresult as $single)
                        <div class="product-layout col-md-3 col-sm-6 col-xs-12">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container lazy second_img ">
										<img data-src="../image/demo/shop/product/11.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
										<img data-src="../image/demo/shop/product/10.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
									</div>
									
								</div>
								
								<div class="right-block">
									<div class="caption">
										<h4><a href="{{url('view_product/'. $single->id)}}">{{$single->name}}</a></h4>		
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
											<span class="price-new">{{$single->price}}</span> 
											
										</div>
										<div class="description item-desc hidden">
											<p>{!!@$single->details!!}</p>
										</div>
									</div>
								</div><!-- right block -->
								<div class="button-group">
									<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishAdd({{$single->id}})"><i class="fa fa-heart"></i></button>
									<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cartAdd({{$single->id}})"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
									{{--<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>--}}
								</div>
							</div>
						</div>
                        <div class="clearfix visible-sm-block"></div>
                        @endforeach
                        
					</div>
                    <!--// End Changed listings-->
					<!-- Filters -->
					{{--<div class="product-filter product-filter-bottom filters-panel" >
						<div class="row">
							<div class="col-md-2 hidden-sm hidden-xs">
							</div>
						   <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
								<div class="form-group" style="margin: 3px 10px">Showing 1 to 9 of 10 (2 Pages)</div>
							</div>
							<div class="box-pagination col-md-3 col-sm-4 text-right"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="#">2</a></li><li><a href="#">&gt;</a></li><li><a href="#">&gt;|</a></li></ul></div>
									
						 </div>
					</div>--}}
					<!-- //end Filters -->
					
				</div>
			</div>
			
			<!--Right Part Start -->
			<aside class="col-md-3 col-sm-4" id="column-right">
				<div class="module menu-category titleLine">
					<h3 class="modtitle"><span>Categories</span></h3>
					<div class="modcontent">
						<div class="box-category">
							<ul id="cat_accordion" class="list-group">
                                @foreach($cats as $cat)
                                <li class="hadchild">
                                    <a href="{{url('view_category/'. $cat->id)}}" class="cutom-parent">{{$cat->name}}</a>   
                                    <span class="button-view  fa fa-plus-square-o"></span>
                                    @foreach($subCats as $subs)
                                        @if($subs->catId == $cat->id)
                                        <ul style="display: block;">
										    <li><a href="{{url('view_subcategory/'. $subs->id)}}">{{$subs->name}}</a></li>
                                        </ul>
                                        @endif
                                    @endforeach
                                </li>
                                @endforeach
							</ul>
						</div>
					</div>
				</div>
				{{--<div class="module tags-product titleLine">
				   <h3 class="modtitle"><span>Tags</span></h3>
				   <div class="modcontent" style="margin-top: 20px;">
						<ul class="tags_cloud">
							<li><a href="#" class="button_grey">allergy</a></li>
							<li><a href="#" class="button_grey">baby</a></li>
							<li><a href="#" class="button_grey">beauty</a></li>
							<li><a href="#" class="button_grey">care</a></li>
							<li><a href="#" class="button_grey">for hecarim</a></li>
							<li><a href="#" class="button_grey">for him</a></li>
							<li><a href="#" class="button_grey">first aid</a></li>
							<li><a href="#" class="button_grey">gift sets</a></li>
							<li><a href="#" class="button_grey">spa</a></li>
							<li><a href="#" class="button_grey">hair care</a></li>
							<li><a href="#" class="button_grey">herbs</a></li>
							<li><a href="#" class="button_grey">medi</a></li>
							<li><a href="#" class="button_grey">natural</a></li>
							<li><a href="#" class="button_grey">oral</a></li>
							<li><a href="#" class="button_grey">pain</a></li>
							<li><a href="#" class="button_grey">pedicure</a></li>
							<li><a href="#" class="button_grey">personal care</a></li>
						</ul>
				   </div> 
				</div>--}}
				<div class="module">
					<div class="modcontent clearfix">
						<div class="banners">
							<div>
								<a href="#"><img src="../image/demo/cms/left-image-static.png" alt="left-image"></a>
							</div>
						</div>
						
					</div>
				</div>
			</aside>
			<!--right Part End -->
		</div>
		<!--Middle Part End-->
</div>
@endsection