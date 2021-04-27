@extends('layouts.FrontEnd.master')

@section('title')
	Order Product
@endsection

@section('Start_Banner')
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-6">
					<h1><b><p style="color:white;font-size:50px;">Our Products</p></b></h1>
					<hr>
					<div class="breadcrmb">
						<p>
							<a href="home">home</a>
							<span class="lnr lnr-arrow-right"></span>
							<a href="contact">order</a>
						</p>
					</div>
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
					<div class="row">
					<div class="tab-content col-lg-12" id="myTabContent">
					<div class="tab-pane fade show active" id="vegetable" role="tabpanel" aria-labelledby="vegetable-tab">
						<div class="row">
							<div class="col-md-6">
							<div class="single_product">
									<img src="{{URL::asset('img/products/'.$item->image)}}" alt="fruits"/>
									<div class="product_content">
										<h4>{{ $item->name }}</h4>
									<div class="our-button btn-group">
									<button type="button" class="btn btn-dark">Price</button>
							<div class="btn-group">
								<button type="button" class="btn btn-danger">{{ $item->price }}Tk</button>
								</div>	
							</div>
								<p>{{ $item->description }}</p>
							</div>
							</div>
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
								<p><b>Product Name:</b></p>
							</div>
							<div class="col-lg-6">
								<p><b>Price:</b></p>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="productname" value="{{ $item->name }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'"
								 class="form-control" required="" type="text" editable="false">
								</div>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input  name="price" value="{{ $item->price }}" onblur="this.placeholder = ''"
								 class="form-control" required="" type="text" editable="false">
								</div>
							</div>
							<div class="col-lg-6">
								<p><b>Description:</b></p>
							</div>
							<div class="col-lg-6">
								<p><b>Product Code:</b></p>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="description" value="{{ $item->description }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'"
								 class="form-control" required="" type="text" editable="false">
								</div>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input  name="pcode" value="{{ $item->id }}" onblur="this.placeholder = ''"
								 class="form-control" required="" type="text" editable="false">
								</div>
							</div>
							<div class="col-lg-6">
								<p><b>Product Type:</b></p>
							</div>
							<div class="col-lg-6">
								<p><b>Quantity:</b></p>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="ptype" value="{{ $item->category }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'"
								 class="form-control" required="" type="text" editable="false">
								</div>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="quantity" value="1" onblur="this.placeholder = ''"
								 class="form-control" required="" type="number">
								</div>
							</div>
							<div class="col-lg-6">
								<p><b>Customer Name:</b></p>
							</div>
							<div class="col-lg-6">
								<p><b>Phone Number:</b></p>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="customername"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'"
								 class="form-control" required="" type="text">
								</div>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = ''"
								 class="form-control" required="" type="text">
								</div>
							</div>
							<div class="col-lg-6">
								<p><b>Email:</b></p>
							</div>
							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = ''"
								 class="form-control" required="" type="text">
								</div>
							</div>
							<div class="col-lg-6">
								<p><b>Address:</b></p>
							</div>
							<div class="col-lg-12 d-flex flex-column">
								<div class="form-group">
								<textarea class="form-control" rows="5" name="address"  onfocus="this.placeholder = ''"
								 onblur="this.placeholder = ''" required=""></textarea>
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