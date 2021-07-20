@extends("layout.index")
@section("content")
<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Checkout</a></li>
				<li><a href="#">Final Review</a></li>
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
					<h2 class="title">Payment Review </h2>
					<div class="table-responsive">
                        <table class="table table-bordered table-hover">
							<thead>
                                <tr >
									<td class="text-center">Order Total Price</td>
									<td>Rs. {{$order->order_total}}</td>
								</tr>
                                <tr >
									<td class="text-center">Gift Packing Charge</td>
									<td>Rs. {{$order->gift_packing_charge}}</td>
								</tr>
                                <tr >
									<td class="text-center">Delivery Charge</td>
									<td>Rs. {{$order->delivery_charge}}</td>
								</tr>
								<tr style="font-size: 22px; background: antiquewhite; color: darkgreen;">
									<td class="text-center">Cart Subtotal Price</td>
									<td>Rs.{{$order->subtotal}}</td>
								</tr>
							</thead>
							
						</table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" style="    text-align: center; margin-bottom: 6%; ">
				<a href="#">
					<button class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Proceed to checkout"><i class="fa fa-remove"></i>
						Cancel							
					</button>
				</a>
				</div>
				<div class="col-sm-6" style="    text-align: center; margin-bottom: 6%; ">
				<a href="#">
					<button class="btn btn-primary" title="" data-toggle="tooltip" type="button" data-original-title="Proceed to checkout"><i class="fa fa-credit-card"></i>
						Make Payment						
					</button>
				</a>
				</div>
                
			</div>
        </div>
    </div>
</div>

@endsection