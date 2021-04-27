@extends('layouts.BackEnd.master')

@section('title')
	Admin-Info
@endsection

@section('heading')
	Info Entry
@endsection

@section('mainContent')

<!------ Include the above in your HEAD tag ---------->

<div class="container contact">
	<div class="row">
		<div class="col-md-6">
			<div class="contact-form">
				<form action="{{url('newInfo')}}" method="post">
					{{ csrf_field() }}
				<div class="form-group">
						<label for="comment">About:</label>
						<textarea class="form-control" rows="5" name="about" placeholder="About's Description"></textarea>
				</div>
				<div class="form-group">
						<label for="InputFile">Image:</label>
							<input type="file" class="form-control" name="file1" required>	
				</div>
				<div class="form-group">
				  <label for="comment">Owner Quotes:</label>
					<textarea class="form-control" rows="5" name="ownerQuotes" placeholder="Owner's Quotes"></textarea>
				</div>
				<div class="form-group">
						<label for="InputFile">Owner's Image:</label>
							<input type="file" class="form-control" name="file2" required>	
				</div>
				<div class="form-group">        
				  	<div class="text-center">
						<button type="submit" class="btn btn-info">Submit</button>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>

@endsection