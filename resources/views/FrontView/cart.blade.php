@extends('layouts.FrontEnd.master')

@section('title')
	Cart
@endsection

@section('Start_Banner')
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-5">
					<h1><b><p style="color:white;font-size:50px;">Cart</p></b></h1>
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
						<h1>
                            <b><p style="color:Black;">In Your Shopping Cart: {{Cart::content()->count()}} Items</p></b>
                        </h1>
					</div>
				</div>
			</div>     
            
            <div class="card">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Picture</th>
                            <th scope="col">Item</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>                                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=0;
                        ?>
                        @if(Cart::content()->count() > 0)
                            @foreach(Cart::content() as $itm)
                                <tr>
                                    <td>
                                        <img src="{{URL::asset('img/products/'.$itm->model->image)}}" alt="item" height="90"width="80"/>
                                    </div>
                                    </td>
                                    <td>{{ $itm->name }}</td>
                                    <td>{{ $itm->price }}</td>
                                    <td>
                                    <a href="{!! route('cart.qty.m', ['id'=>$itm->rowId]) !!}" class="fa fa-minus"></a>
                                        {{ $itm->qty }}
                                    <a href="{!! route('cart.qty.p', ['id'=>$itm->rowId]) !!}" class="fa fa-plus"></a>
                                    </td>
                                    <td>{{ $itm->total() }}</td>
                                    <td>
                                        <a href="{!! route('cart.delete', ['id'=>$itm->rowId]) !!}" class="btn btn-danger">Remove</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                            <th colspan="6" class="text-center"><h3><b>Cart is empty</b></h3></th>
                            </tr>
                        @endif
                    </tbody> 
                </table> 
                @if(Cart::content()->count() > 0)
                    <div class="text-right" style="padding-bottom:20px;padding-right:80px">
                        <h3 style="padding-bottom:10px"><b>Total = {{ Cart::total() }} </b></h3>
                        <a href="{!! route('products') !!}" class="btn btn-dark">Continue Shopping</a>
                    </div>              
                @else  
                    <a href="{!! route('products') !!}" class="btn btn-dark">Continue Shopping</a>
                @endif
            </div>  
            @if(Cart::content()->count() > 0)
            <div>
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
            @endif 
		</div> 
	</section>
@endsection