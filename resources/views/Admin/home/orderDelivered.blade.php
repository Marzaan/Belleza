@extends('layouts.BackEnd.master')

@section('title')
	Admin-OrderDelivered
@endsection

@section('heading')
	Order Delivered
@endsection

@section('mainContent')
				<div class="card">
                                <table class="table table-bordred table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">No</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Phone</th>
                                          <th scope="col">Address</th>
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
                                            <td>{{ $i }}</td>
                                            <td>{{ $req->CustomerName }}</td>
                                            <td>{{ $req->email }}</td>
                                            <td>{{ $req->phone }}</td>
                                            <td>{{ $req->address }}</td>
                                            <td>
                                                <a href="{!! route('request.viewDelivered', ['id'=>$req->id]) !!}" class="btn btn-success btn-sm">View Order</a>
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