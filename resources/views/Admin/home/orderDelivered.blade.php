@extends('layouts.BackEnd.master')

@section('title')
	Admin-OrderDelivered
@endsection

@section('heading')
	Order Delivered
@endsection

@section('mainContent')
<script>
  function confirmToDelete(){
    var var1 = confirm("Are you sure to delete this?");
    if(var1 == true){
      return true;
    }
    else{
      return false;
    }
  }
</script>
				<div class="card">
                                <table class="table table-bordred table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">Name</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Phone</th>
                                          <th scope="col">Address</th>
                                          <th scope="col">Product Name</th>
                                          <th scope="col">Code</th>
                                          <th scope="col">Type</th>
                                          <th scope="col">Quantity</th>
                                          <th scope="col">Bill</th>
                                          <th scope="col">Action</th>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      $i=0;
                                    ?>
                                    @if($req->count() > 0)
                                      @foreach($req as $req)
                                        @if($req->status=='Completed')
                                        <?php
                                          ++$i;
                                        ?>
                                        <tr>
                                        <td>{{ $req->CustomerName }}</td>
                                            <td>{{ $req->email }}</td>
                                            <td>{{ $req->phone }}</td>
                                            <td>{{ $req->address }}</td>
                                            <td>{{ $req->productName }}</td>
                                            <td>{{ $req->pid }}</td>
                                            <td>{{ $req->productType }}</td>
                                            <td>{{ $req->quantity }}</td>
                                            <td>{{ $req->price*$req->quantity }}</td>
                                            <td>
                                                <a href="{!! route('request.delete', ['id'=>$req->id]) !!}" class="btn btn-danger btn-sm" onclick="return confirmToDelete()">Delete</a>
                                            </td>
                                        </tr>
                                        @endif
                                      @endforeach
                                    @else
                                        <?php
                                          ++$i;
                                        ?>
                                          <tr>
                                            <th colspan="10" class="text-center">No order Completed</th>
                                          </tr>
                                    @endif
                                    @if($i==0)
                                        <tr>
                                            <th colspan="10" class="text-center">No order Completed</th>
                                          </tr>
                                    @endif
                                    </tbody>
                                </table>
                </div>
@endsection