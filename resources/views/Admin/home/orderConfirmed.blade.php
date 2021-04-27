@extends('layouts.BackEnd.master')

@section('title')
	Admin-OrderConfirmed
@endsection

@section('heading')
	Order Confirmed
@endsection

@section('mainContent')
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
                                    @if($req->count() > 0 )
                                      @foreach($req as $req)
                                        @if($req->status=='Confirmed')
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
                                            <a href="{!! route('request.complete', ['id'=>$req->id]) !!}" class="btn btn-success btn-sm">Complete</a>
                                            </td>
                                        </tr>
                                        @endif
                                      @endforeach
                                    @else
                                    	<?php
                                        	++$i;
                                        ?>
                                          <tr>
                                            <th colspan="10" class="text-center">No Order Confirmed</th>
                                          </tr>
                                    @endif
                                    @if($i==0)
                                    	  <tr>
                                            <th colspan="10" class="text-center">No Order Confirmed</th>
                                          </tr>
                                    @endif
                                    </tbody>
                                </table>
                </div>
@endsection