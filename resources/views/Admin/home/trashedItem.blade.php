@extends('layouts.BackEnd.master')

@section('title')
	Admin-Trashed
@endsection

@section('heading')
	Trashed Items
@endsection

@section('mainContent')
<script>
  function confirmToDelete(){
    var var1 = confirm("Are you sure to delete this permanently?");
    if(var1 == true){
      return true;
    }
    else{
      return false;
    }
  }
</script>
                <div class="card">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col">Serial</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Category</th>
                                          <th scope="col">Price</th>
                                          <th scope="col">Description</th>
                                          <th scope="col">Picture</th>
                                          <th scope="col">Action</th>                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i=0;
                                        ?>

                                        @if($item->count() > 0)
                                          @foreach($item as $item)
                                            <tr>
                                              <th scope="row">{{ ++$i }}</th>
                                              <td>{{ $item->name }}</td>
                                              <td>{{ $item->category }}</td>
                                              <td>{{ $item->price }}</td>
                                              <td>{{ $item->description }}</td>
                                              <td><img src="{{ asset('img/products/'.$item->image) }}" alt="gallery" height="60"width="60"/></td>
                                              <td>
                                              <a href="{!! route('item.restore', ['id'=>$item->id]) !!}" class="btn btn-success">Restore</a>
                                              <a href="{!! route('item.kill', ['id'=>$item->id]) !!}" class="btn btn-danger" onclick="return confirmToDelete()">Delete</a>
                                              </td>
                                            </tr>
                                          @endforeach
                                        @else
                                          <tr>
                                            <th colspan="5" class="text-center">No trashed items</th>
                                          </tr>
                                        @endif
                                    </tbody>
                                </table>
                </div>

@endsection