@extends('layouts.BackEnd.master')

@section('title')
	Admin-Items
@endsection

@section('heading')
	Items
@endsection

@section('mainContent')

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

                                                <a href="{!! route('item.edit', ['id'=>$item->id]) !!}" class="btn btn-info">Edit</a>
                                                <a href="{!! route('item.delete', ['id'=>$item->id]) !!}" class="btn btn-danger">Delete</a>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                      @else
                                          <tr>
                                            <th colspan="5" class="text-center">No published items</th>
                                          </tr>
                                      @endif
                                    </tbody>
                                </table>
                </div>

@endsection