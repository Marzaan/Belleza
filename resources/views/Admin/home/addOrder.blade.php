@extends('layouts.BackEnd.master')

@section('title')
	Admin-NewTable
@endsection

@section('heading')
	Add Table
@endsection

@section('mainContent')
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
								<input name="productname" value="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'"
								 class="form-control" required="" type="text">
								</div>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input  name="price" value="" onblur="this.placeholder = ''"
								 class="form-control" required="" type="text" >
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
								<input name="description" value="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'"
								 class="form-control" required="" type="text" >
								</div>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input  name="pcode" value="" onblur="this.placeholder = ''"
								 class="form-control" required="" type="text" >
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
								<input name="ptype" value="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'"
								 class="form-control" required="" type="text" >
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
								<button type="submit" class="btn btn-success">Order Confirm</button>
								</div>
							</div>
						
					</div>
					</form>
					
				</div>
			</div>
		</div>
	</section>
@endsection