@extends('layouts.FrontEnd.master')

@section('title')
	Belleza
@endsection

@section('Start_Banner')
	<section class="home-banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="home-banner-content col-lg-5">
					<h1><b><p style="color:white;font-size:50px;">Belleza</p></b></h1>
					<hr>
					<b><p style="color:white;font-size:20px;">A Trusted Online Shop</p></b>
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

@section('Gallery')
	<section class="chefs-quotes-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1><b>
							Owner’s 
							Quotes
							</b>
							<br>
						</h1>
						@foreach($about as $about)
						<p>
							<?php 
								echo "<br>";
								echo nl2br($about->ownerQuotes) 
							?>
						</p>
						<img src="img/signature.png" class="img-fluid" alt="">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-6">
					<div class="mt--120">
						<img class="chef-img img-fluid" src="{{ asset('img/'.$about->ownerImage ) }}" alt="">
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Owners_Quotes')
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
									<img src="{{URL::asset('img/products/'.$ad->image)}}" alt=""/>
									<div class="product_content">
										<h4>{{ $ad->name }}</h4>
										<form action="{{url('cart/add')}}" method="post">
											<div class="our-button btn-group">
													{{ csrf_field() }}
													<button type="submit" class="btn btn-dark">Add Cart</button>
													<input type="hidden" name="pdt_id" value="{{ $ad->id }}">
												<div class="btn-group">
													<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Price</button>
														<div class="dropdown-menu">
															<button type="button" class="dropdown-item">{{ $ad->price }}Tk</button>
														</div>
												</div>	
											</div>
										</form>
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
									<img src="{{URL::asset('img/products/'.$ad->image)}}" alt=""/>
									<div class="product_content">
										<h4>{{ $ad->name }}</h4>
										<form action="{{url('cart/add')}}" method="post">
											<div class="our-button btn-group">
													{{ csrf_field() }}
													<button type="submit" class="btn btn-dark">Add Cart</button>
													<input type="hidden" name="pdt_id" value="{{ $ad->id }}">
												<div class="btn-group">
													<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Price</button>
														<div class="dropdown-menu">
															<button type="button" class="dropdown-item">{{ $ad->price }}Tk</button>
														</div>
												</div>	
											</div>
										</form>
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
	<div class="text-center">
		<a href="products" class="primary-btn mt-30 text-uppercase">View More</a>
	</div>
@endsection

@section('Contact')
		<section class="contact-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div id="contactMap"></div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1><b>
							Belleza <br>
							Online Shop <br>
							</b>
						</h1>
						<div class="mb-40"></p>
							@foreach($contact as $contact)
							<p>{{ $contact->address }}</p>
							@endforeach
						</div>
						<div class="mb-40">
							<p>{{ $contact->contact1}}</p>
							<p>{{ $contact->contact2}}</p>
							<p>{{ $contact->contact3}}</p>
						</div>
						<div class="mail">
							<p>{{ $contact->email1 }}</p>
							<p>{{ $contact->email3 }}</p>
						</div>
					</div>
					<form class="contact-form" action="{{url('newMsg')}}" method="post">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="name" placeholder="Contact Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Name'"
								 class="form-control" required="" type="text">
								</div>
							</div>
						
						
							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'"
								 class="form-control" required="" type="email">
								</div>
							</div>
						
						
							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"
								 class="form-control" required="" type="text">
								</div>
							</div>
						
						
							<div class="col-lg-12 d-flex flex-column">
								<div class="form-group">
								<textarea class="form-control" name="message" placeholder="Post a message" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Post a message'" required=""></textarea>
								</div>
							</div>
						
						
							<div class="col-lg-12 d-flex justify-content-end">
								<div class="form-group">
								<button type="submit" class="primary-btn mt-30 text-uppercase">Send Message</button>
								</div>
							</div>
						</div>
					</form>
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
								<img src="img/callaction-bg.jpg" alt=" "width="1000" height="450">
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