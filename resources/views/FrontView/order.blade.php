@extends('layouts.FrontEnd.master')

@section('title')
	Order Product
@endsection

@section('Start_Banner')
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-6">
					<h1><b><p style="color:white;font-size:50px;">Order Products</p></b></h1>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Products')
<section id="our_product" class="pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page_title text-center mb-4">
						<h1>Your Products</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Reservation')
		<section class="reservation-area">
		<div class="container">
			<br>
				<h1 class="text-danger">Please fill up the form to Order</h1>
			<br>
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-6">
					<form class="booking-form" action="{{url('order')}}" method="post">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-lg-6">
								<p><b>Customer Name:</b></p>
							</div>
							<div class="col-lg-6">
								<p><b>Phone Number:</b></p>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="customername"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Customer Name'"
								 class="form-control" type="text">
								</div>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"
								 class="form-control" type="text">
								</div>
							</div>
							<div class="col-lg-6">
								<p><b>Email:</b></p>
							</div>
							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"
								 class="form-control" type="text">
								</div>
							</div>
							<div class="col-lg-6">
								<p><b>Address:</b></p>
							</div>
							<div class="col-lg-12 d-flex flex-column">
								<div class="form-group">
								<textarea class="form-control" rows="5" name="address"  onfocus="this.placeholder = 'Address'"
								 onblur="this.placeholder = ''"></textarea>
								</div>
							</div>
							<div class="col-lg-12 d-flex justify-content-end">
								<div class="form-group">
								<button type="submit" class="primary-btn mt-30 text-uppercase">Order Confirm</button>
								</div>
							</div>
						
					</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection