@extends('layouts.FrontEnd.master')

@section('title')
	About
@endsection

@section('Start_Banner')
		<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-5">
					<h1><b><p style="color:white;font-size:50px;">About Us</p></b></h1>
					<hr>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Products')
	<section class="about-area section-gap-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-6">
					<div class="">
						@foreach($info as $info)
						<img class="img-fluid" src="{{ asset('img/gallery/'.$info->image)}}" alt="">
						@endforeach
					</div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1><b>
							About <br>
							Belleza <br>
							</b>
						</h1>
						<p>
							{{ $info->description}}
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Owners_Quotes')
	<section class="chefs-quotes-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1><b>
							Owner’s <br>
							Quotes
							</b>
						</h1>
						<p>
							<?php echo nl2br($info->ownerQuotes) ?>
						</p>
						<img src="img/signature.png" class="img-fluid" alt="">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-6">
					<div class="mt--120">
						<img class="chef-img img-fluid" src="{{ asset('img/'.$info->ownerImage) }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Main_Course')
	<section class="container section-gap-top">
		<div class="callto-action-area relative">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12 p-0">
					<div class="cta-owl owl-carousel">
						<div class="item">
							<div class="cta-img">
								<img src="img/callaction-bg.jpg" width="1000" height="450" alt="">
							</div>
							<div class="text-box text-center">
								<h3 class="mb-10">Make Up</h3>
								<p>
									We always focus on quality product
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cta-img">
								<img src="img/callaction-bg.jpg" width="1000" height="450" alt="">
							</div>
							<div class="text-box text-center">
								<h3 class="mb-10">Cosmetics</h3>
								<p>
									We always focus on quality product
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection