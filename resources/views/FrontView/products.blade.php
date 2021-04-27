@extends('layouts.FrontEnd.master')

@section('title')
	Products
@endsection

@section('Start_Banner')
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-5">
					<h1><b><p style="color:white;font-size:50px;">Products</p></b></h1>
					<hr>
					<div class="breadcrmb">
						<p>
							<div class="col-md-12">
								<form action="searchPro" method="get">
									<input type="search" name="searchPro" class="form-control" placeholder="Search"/>	
								</form>
							</div>
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
						<h1><b>Our Products</b></h1>
			<div class="text-right">
				<div class="btn-group">
					<a href="sort" class="btn btn-info btn-lg dropdown-toggle" data-toggle="dropdown">Sort By Price</a>
					<div class="dropdown-menu">
						<a href="face" class="dropdown-item" class="btn btn-secondary btn-lg">Face</a>
						<a href="eye" class="dropdown-item" class="btn btn-secondary btn-lg">Eye</a>
						<a href="lip" class="dropdown-item" class="btn btn-secondary btn-lg">Lip</a>
					</div>
				</div>
			</div>
					</div>
				</div>
			</div>
				<?php
					$i=0;
				?>
				@foreach($item as $ad)
					@if($i==0)
					<?php
						$i=1;
					?>
					<div class="row">
					<div class="tab-content col-lg-12" id="myTabContent">
					<div class="tab-pane fade show active" id="vegetable" role="tabpanel" aria-labelledby="vegetable-tab">
						<div class="row">
							<div class="col-md-6">
							<div class="single_product">
									<img src="{{URL::asset('img/products/'.$ad->image)}}"/>
									<div class="product_content">
										<h4>{{ $ad->name }}</h4>
									<div class="our-button btn-group">
										<a href="{!! route('order', ['id'=>$ad->id]) !!}" class="btn btn-dark">Order</a>
							<div class="btn-group">
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Price</button>
									<div class="dropdown-menu">
										<button type="button" class="dropdown-item">{{ $ad->price }}Tk</button>
									</div>
								</div>	
							</div>
								<p>{{ $ad->description }}</p>
								</div>
							</div>
						</div>	

					@elseif($i==1)
					<?php
						$i=0;
					?>
							<div class="col-md-6">
								<div class="single_product">
									<img src="{{URL::asset('img/products/'.$ad->image)}}"/>
									<div class="product_content">
										<h4>{{ $ad->name }}</h4>
								
									<div class="our-button btn-group">
									<a href="{!! route('order', ['id'=>$ad->id]) !!}" class="btn btn-dark">Order</a>
							<div class="btn-group">
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Price</button>
									<div class="dropdown-menu">
										<button type="button" class="dropdown-item">{{ $ad->price }}Tk</button>
										
									</div>
								</div>	
							</div>
								<p>{{ $ad->description }}</p>
								</div>
							</div>
						</div>
						</div>
					</div>

					@endif
				@endforeach	
		</div>
	</section>
@endsection