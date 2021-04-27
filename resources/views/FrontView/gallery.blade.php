@extends('layouts.FrontEnd.master')

@section('title')
	Gallery
@endsection

@section('Start_Banner')
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-6">
					<h1><b><p style="color:white;font-size:50px;">Gallery</p></b></h1>
					<hr>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Gallery')
<section class="gallery-area">
	<div class="container">
		<div class="text-right">
		<div class="btn-group">
			<a href="sort" class="btn btn-info btn-lg dropdown-toggle" data-toggle="dropdown">Sort By</a>
				<div class="dropdown-menu">
					<a href="Gface" class="dropdown-item" class="btn btn-secondary btn-lg">Face</a>
					<a href="Geye" class="dropdown-item" class="btn btn-secondary btn-lg">Eye</a>
					<a href="Glip" class="dropdown-item" class="btn btn-secondary btn-lg">Lip</a>
				</div>
		</div>
</div>
		<div class="row align-items-center">
			@foreach($img as $img)
			<div class="col-lg-5 col-md-6 col-sm-6">
				<div class="single-gallery">
					<div class="overlay"></div>
					<figure>
						<img src="{{asset('img/products/'.$img->image)}}" alt="img" width="500" height="500">
					</figure>
					<div class="icon">
						<a href="{{asset('img/products/'.$img->image)}}" class="photo-gallery-pop-up">
							<span class="lnr lnr-cross"></span>
						</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection
