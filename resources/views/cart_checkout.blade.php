@extends("layout.index")
@section("content")
<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Checkout</a></li>
				
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-12">
				<h2 class="title">Checkout</h2>
				<form action="/make_payment" method="post">
				@csrf
				  <div class="row">
					<div class="col-sm-4">
					  
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
						</div>
						  <div class="panel-body">
								<fieldset id="account">
								  <div class="form-group required">
									<label for="input-payment-firstname" class="control-label">First Name</label>
									<input required type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="" name="firstname">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-lastname" class="control-label">Last Name</label>
									<input required type="text" class="form-control" id="input-payment-lastname" placeholder="Last Name" value="" name="lastname">
								  </div>
								  <div class="form-group">
									<label for="input-payment-email" class="control-label">E-Mail</label>
									<input required type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="" name="email">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-telephone" class="control-label">Telephone</label>
									<input required type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="" name="telephone">
								  </div>
								  
								</fieldset>
							  </div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-book"></i> Your Shipping Address</h4>
						</div>
						  <div class="panel-body">
								<fieldset id="address" class="required">
								  
								  <div class="form-group required">
									<label for="input-payment-address-1" class="control-label">Address Line 1</label>
									<input required type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="" name="address_1">
								  </div>
								  <div class="form-group">
									<label for="input-payment-address-2" class="control-label">Address Line 2</label>
									<input type="text" class="form-control" id="input-payment-address-2" placeholder="Address 2" value="" name="address_2">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-city" class="control-label">City</label>
									<input required type="text" class="form-control" id="input-payment-city" placeholder="City" value="" name="city">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-postcode" class="control-label">Post Code</label>
									<input required type="text" class="form-control" id="input-payment-postcode" placeholder="Post Code" value="" name="postcode">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-country" class="control-label">Country</label>
									<select required class="form-control" id="input-payment-country" name="country_id">
									  <option value=""> --- Please Select --- </option>
									  <option value="244">Aaland Islands</option>
									  <option value="1">Afghanistan</option>
									  <option value="2">Albania</option>
									  <option value="3">Algeria</option>
									  <option value="4">American Samoa</option>
									  <option value="5">Andorra</option>
									  <option value="6">Angola</option>
									  <option value="7">Anguilla</option>
									  <option value="8">Antarctica</option>
									  <option value="9">Antigua and Barbuda</option>
									  <option value="10">Argentina</option>
									  <option value="11">Armenia</option>
									  <option value="12">Aruba</option>
									  <option value="252">Ascension Island (British)</option>
									  <option value="13">Australia</option>
									  <option value="14">Austria</option>
									  <option value="15">Azerbaijan</option>
									  <option value="16">Bahamas</option>
									  <option value="17">Bahrain</option>
									  
									</select>
								  </div>
								  <div class="form-group required">
									<label for="input-payment-zone" class="control-label">Region / State</label>
									<select required class="form-control" id="input-payment-zone" name="zone_id">
									  <option value=""> --- Please Select --- </option>
									  <option value="3513">Aberdeen</option>
									  <option value="3514">Aberdeenshire</option>
									  <option value="3515">Anglesey</option>
									  <option value="3516">Angus</option>
									  <option value="3517">Argyll and Bute</option>
									  <option value="3518">Bedfordshire</option>
									  <option value="3519">Berkshire</option>
									  <option value="3520">Blaenau Gwent</option>
									  <option value="3521">Bridgend</option>
									  <option value="3522">Bristol</option>
									  
									</select>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" checked="checked" value="1" name="shipping_address">
									  My delivery and billing addresses are the same.</label>
								  </div>
								</fieldset>
							  </div>
					  </div>
					</div>
					<div class="col-sm-8">
					  <div class="row">
						<div class="col-sm-6">
						  {{--<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-truck"></i> Delivery Method</h4>
							</div>
							  <div class="panel-body">
								<p>Please select the preferred shipping method to use on this order.</p>
								<div class="radio">
									<label>
										<input type="radio" value="default">
										Default Delivery- Shipping Rate - Rs. 0.0
									</label>
								</div>
							  </div>
						  </div>--}}
						</div>
						<div class="col-sm-6">
						  {{--<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
							</div>
							  <div class="panel-body">
								<p>Please select the preferred payment method to use on this order.</p>
								<div class="radio">
								  <label>
									<input type="radio" checked="checked" name="Cash On Delivery">Cash On Delivery</label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="Bank Transfer">Bank Transfer</label>
								</div>
								
							  </div>
						  </div>--}}
						</div>
						<div class="col-sm-12">
						</div>
						
						<div class="col-sm-12">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
							</div>
							  <div class="panel-body">
								<div class="table-responsive">
								  <table class="table table-bordered">
									<thead>
                                    <tr>
                                        <td class="text-center">Image</td>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left">Product Quantity</td>
                                        <td class="text-right">Unit Price</td>
                                        <td class="text-right">Total Price</td>
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
										</td>
										<td class="text-right">
											<div class="price">Rs.{{$cart->product->price}}</div>
										</td>
										<td class="text-right">
											<?php $total+= $cart->product->price * $cart->quantity; ?>
											<div class="price">Rs.{{$cart->product->price * $cart->quantity}}</div>
										</td>
									</tr>
									@endforeach
									</tbody>
									<tfoot>
									  <tr>
										<td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
										<td class="text-right">Rs. {{$total}}</td>
									  </tr>
									  
									</tfoot>
								  </table>
								</div>
							  </div>
						  </div>
						</div>
						<div class="col-sm-12">
							<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Details</h4>
						  	</div>
							<div class="panel-body">
								<div class="form-group required">
								<label for="payment-details" class="control-label">Select your mode of payment</label>
								<select required class="form-control" id="payment-details" name="payment">
									<option value=""> --- Please Select --- </option>
									<option value="cod">Cash on delivery</option>
									<option value="bank">Bank transfer</option>
								</select>	
						  		</div>
								<div class="checkbox">
									<label>
									  <input type="checkbox" value="1" name="gift">
									  Your delivery items will be gift packed (include Rs. 10.0 as extra charge)
									</label>
								</div>								
							</div>
						  	</div>
						</div>
						<div class="col-sm-12">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-gift"></i> Use Gift Voucher</h4>
							</div>
							  <div class="panel-body">
								<label for="input-voucher" class="col-sm-3 control-label">Enter gift voucher code</label>
								<div class="input-group">
								  <input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift voucher code here" value="" name="voucher">
								  <span class="input-group-btn">
								  <input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-voucher" value="Apply Voucher">
								  </span> </div>
							  </div>
						  </div>
						</div>
						<div class="col-sm-12">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
							</div>
							  <div class="panel-body">
								<textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
								<br>
								<label class="control-label" for="confirm_agree">
								  <input required type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
								  <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
								<div class="buttons">
								  <div class="pull-right">
									<button type="submit" class="btn btn-primary" id="button-confirm" value="Confirm Order">
										Confirm Order
						  			</button>
								  </div>
								</div>
							  </div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</form>
				</div>
				<!--Middle Part End -->
				
			</div>
</div>
@endsection