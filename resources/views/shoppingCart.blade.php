@extends("layout.index")
@section("content")
<meta name="csrf-token" content="{!! csrf_token() !!}">
<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Account</a></li>
				<li><a href="#">My Shopping Cart</a></li>
			</ul>
            <div class="category-derc">
				<div class="row">
                    <div class="col-sm-3">
                    </div>
					<div class="col-sm-9">
						<div class="banners">
							<div>
							    <a  href="#"><img src="../image/demo/shop/category/electronic-cat.png" alt="Apple Cinema 30&quot;"><br></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-12">
					<h2 class="title">My Wish List</h2>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<td class="text-center">Image</td>
									<td class="text-left">Product Name</td>
									<td class="text-left">Product Quantity</td>
									<td class="text-right">Unit Price</td>
									<td class="text-right">Total Price</td>
									<td class="text-right">Action</td>
								</tr>
							</thead>
							<tbody>
								<?php $total=0.0;?>
                                @foreach($carts as $cart)
                                <tr>
									<td class="text-center">
										<a  href="{{url('view_product/'. $cart->prodId)}}">
                                            <img width="70px" src="image/demo/shop/product/18.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop">
										</a>
									</td>
									<td class="text-left"><a href="product.html">{{$cart->product->name}}</a>
									</td>
									<td class="text-left"><a href="product.html">{{$cart->quantity}}</a>
										<button class="btn btn-success"
										style="float: right;"
										title="" data-toggle="tooltip"
										onclick="cartIncrease({{$cart->prodId}})"
										type="button" data-original-title="Increase quantity by 1"><i class="fa fa-plus"></i>
										</button>
									</td>
									
									
									<td class="text-right">
										<div class="price">Rs.{{$cart->product->price}}</div>
										
									</td>
									<td class="text-right">
										<?php $total+= $cart->product->price * $cart->quantity; ?>
										<div class="price">Rs.{{$cart->product->price * $cart->quantity}}</div>
										
									</td>
									<td class="text-right">
										{{--<button class="btn btn-primary"
										title="" data-toggle="tooltip"
										onclick="cartAdd({{$cart->prodId}})"
										type="button" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
										</button>--}}
										<button class="btn btn-danger"
										title="" data-toggle="tooltip"
										onclick="cartRemove({{$cart->prodId}})"
										type="button" data-original-title="Remove from Cart"><i class="fa fa-remove"></i>
										</button>
									</td>
								</tr>
                                @endforeach
							</tbody>
						</table>

						<table class="table table-bordered table-hover" style="margin-top: 8%;">
							<thead>
								<tr style="font-size: 22px; background: antiquewhite; color: darkgreen;">
									<td class="text-center">Cart Subtotal Price: Rs.{{$total}}</td>
									
								</tr>
							</thead>
							
						</table>
					</div>
				</div>

				<!--Middle Part End-->
				
			</div>
			<div class="row">
				<div class="col-sm-12" style="    text-align: center; margin-bottom: 6%; ">
				<a href="cart_checkout">
					<button class="btn btn-warning" title="" data-toggle="tooltip" type="button" data-original-title="Proceed to checkout"><i class="fa fa-share"></i>
						Proceed to checkout							
					</button>
				</a>
				</div>
			</div>
			
</div>
@endsection