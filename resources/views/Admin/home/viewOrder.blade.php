@extends('layouts.BackEnd.master')

@section('title')
	Admin-Customer Order
@endsection

@section('mainContent')
<script>
  function confirmToCancel(){
    var var1 = confirm("Are you sure to cancel this request?");
    if(var1 == true){
      return true;
    }
    else{
      return false;
    }
  }
</script>
<div class="section-title relative">
            <h3 style="display:inline">Name:</h3><p style="display:inline">&emsp;{{ $info->CustomerName }}</p>&emsp;&emsp;&emsp;
						<h3 style="display:inline">Email:</h3><p style="display:inline">&emsp;{{ $info->email }}</p>
            <br><br>
            <h3 style="display:inline">Phone:</h3><p style="display:inline">&emsp;{{ $info->phone }}</p>&emsp;&emsp;&emsp;
            <h3 style="display:inline">Address:</h3><p style="display:inline">&emsp;{{ $info->address }}</p>
            <div class="text-center">
              <h3><b>Product List</b></h3>
            </div>
					</div>
                    <div class="card">
                      <table class="table table-bordred table-striped">
                          <thead class="thead-dark">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Category</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Code</th>
                                <th scope="col">Price</th>    
                                <th scope="col">Quantity</th>                         
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                            $i=0;
                            $j=0;
                            $bill=0;
                          ?>
                          @if($req->count() > 0 )
                            @foreach($req as $req)
                              @if($req->status=='Not Confirm' && $req->email==$info->email)
                              <?php
                                ++$i;
                                $bill = $bill+($req->quantity*$req->price);
                              ?>
                              <tr>
                                  <td>{{ ++$j }}</td>
                                  <td>{{ $req->productType }}</td>
                                  <td>{{ $req->productName }}</td>
                                  <td>{{ $req->pid }}</td>
                                  <td>{{ $req->price }}</td>
                                  <td>{{ $req->quantity }}</td>
                              </tr>
                              @endif
                            @endforeach
                          @else
                            <?php
                              ++$i;
                            ?>
                              <tr>
                                <th colspan="10" class="text-center">No request left</th>
                              </tr>
                          @endif
                          @if($i==0)
                              <tr>
                                <th colspan="10" class="text-center">No request left</th>
                              </tr>
                          @endif
                          </tbody>
                      </table>
                      <div class="text-center">
                        <h3>Total Bill: {{ $bill }}</h3>
                      </div>
                      <div class="text-center">
                        <a href="{!! route('request.confirm', ['id'=>$info->id]) !!}" class="btn btn-success btn-xs">Confirm</a>
                        <a href="{!! route('request.delete', ['id'=>$info->id]) !!}" class="btn btn-danger btn-xs" onclick="return confirmToCancel()">Cancel</a>
                      </div>
                    </div>
@endsection