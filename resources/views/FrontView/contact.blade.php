@extends('layouts.FrontEnd.master')

@section('title')
	Contact
@endsection

@section('Start_Banner')
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-6">
					<h1><b><p style="color:white;font-size:50px;">Contact</p></b></h1>
					<hr>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Contact')
		<section class="contact-area section-gap">
		<div class="container">
			<div class="row align-items-start">
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
						<div class="mb-20">
							@foreach($contact as $contact)
							<p>{{ $contact->address }}</p>
							@endforeach
						</div>
						<div class="mb-20">
							<p>{{ $contact->contact1 }}</p>
							<p>{{ $contact->contact2 }}</p>
							<p>{{ $contact->contact3 }}</p>
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