@extends("layout.index")
@section("content")
<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Account</a></li>
				<li><a href="#">Register</a></li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<div class="page-login">
						<div class="account-border">
                        <div class="row">
								
								<form action="/create_account" method="post" enctype="multipart/form-data">
								@csrf
                                        <div class="col-sm-4 new-customer">
                                        </div>
									<div class="col-sm-8 customer-login">
                                    @include("layout.flash_msg") 
										<div class="well">
											<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> New Customer</h2>
											<p><strong>I am a new customer</strong></p>
											<div class="form-group">
												<label class="control-label " for="input-email">Name</label>
												<input type="text" name="name" value="" id="name" class="form-control" required/>
											</div>
											<div class="form-group">
												<label class="control-label " for="input-email">Mobile Number</label>
												<input type="text" name="phn" value="" id="phn" class="form-control" required/>
											</div>
											<div class="form-group">
												<label class="control-label " for="input-email">E-Mail Address</label>
												<input type="text" name="email" value="" id="email" class="form-control" required />
											</div>
											<div class="form-group">
												<label class="control-label " for="input-email">Address</label>
												<input type="text" name="addr" value="" id="addr" class="form-control" required/>
											</div>
											<div class="form-group">
												<label class="control-label " for="input-email">Pincode</label>
												<input type="text" name="pin" value="" id="pin" class="form-control" required/>
											</div>
											<div class="form-group">
												<label class="control-label " for="input-password">Password</label>
												<input type="password" name="password" value="" id="password" class="form-control" required/>
											</div>
										</div>
										<div class="bottom-form">
											<input type="submit" value="Register" class="btn btn-default pull-right" />
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


@endsection