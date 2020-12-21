@extends('layouts.BackEnd.master')

@section('title')
	Admin-Items Edit
@endsection

@section('heading')
	Edit Item
@endsection

@section('mainContent')

<!------ Include the above in your HEAD tag ---------->


<div class="container contact">
	<div class="row">
		<div class="col-md-6">
			<div class="contact-form">
				<form action="{{ route('item.update',['id '=> $item->id]) }}" method="post" name="editForm">
					{{ csrf_field() }}
				<div class="form-group">
						<label for="inputName">Item Name:</label>
						<input type="text" class="form-control" name="name" value="{{ $item->name }}" required>
				</div>
				<div class="form-group">
						<label for="inputName">Category:</label>
						<select class="form-control" name="category">
							<option value="Face">Face</option>
							<option value="Eye">Eye</option>
							<option value="Lip">Lip</option>
						</select>
				</div>
				<div class="form-group">
						<label for="inputName">Price:</label>
						<input type="number" class="form-control" name="price" value="{{ $item->price }}" required>
				</div>
				<div class="form-group">
				  <label for="comment">Description:</label>
					<textarea class="form-control" rows="5" name="description" required>{{ $item->description }}</textarea> 
				</div>
				<div class="form-group">
						<label for="InputFile">Upload Product Image:</label>
							<input type="file" class="form-control" name="file">
				</div>
				<div class="form-group">        
				  	<div class="text-center">
						<button type="submit" class="btn btn-info">Update</button>
					</div>
				</div>
			</form>
			</div>
			<script type="text/javascript">
				document.forms['editForm'].elements['category'].value="{{ $item->category }}"
			</script>
		</div>
	</div>
</div>

@endsection