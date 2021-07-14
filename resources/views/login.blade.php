@extends("layout.index")
@section("content")

<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Account</a></li>
				<li><a href="#">Login</a></li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
					<div class="page-login">
					
						<div class="account-border">
							<div class="row">
								<div class="col-sm-4 new-customer">
								</div>
								
								<form action="/login_check" method="post" enctype="multipart/form-data">
								@csrf
									<div class="col-sm-8 customer-login">
									@include("layout.flash_msg") 
										<div class="well">
											<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
											<p><strong>I am a returning customer</strong></p>
											<div class="form-group">
												<label class="control-label " for="input-email">E-Mail Address</label>
												<input type="text" name="email" value="" id="email" class="form-control" />
											</div>
											<div class="form-group">
												<label class="control-label " for="input-password">Password</label>
												<input type="password" name="password" value="" id="password" class="form-control" />
											</div>
										</div>
										<div class="bottom-form">
											<a href="#" class="forgot">Forgotten Password</a>
											<input type="submit" value="Login" class="btn btn-default pull-right" />
										</div>
										<div class="bottom-form" style="text-align: center;">
											<a href="/register">
												
													Do not have an account? Create one!
												
											</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
@endsection