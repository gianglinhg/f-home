@extends('layouts.admin')
 
@section('title', 'Data product')
 
@section('content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data product</h6>
    </div>
    <div class="card-body">
           
      <a href="{{ route('product.add') }}" class="btn btn-primary mb-3">Add product</a>
           
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              
              <th style="text-align: center">Category_id</th>
              <th style="text-align: center">Image</th>
              <th style="text-align: center">Name</th>
              <th style="text-align: center">Slug</th>
              <th style="text-align: center">Description</th>
              <th style="text-align: center">Content</th>
              <th style="text-align: center">Price</th>
              <th style="text-align: center">Discount</th>
              <th style="text-align: center">Sku</th>
              <th style="text-align: center">Featured</th>
              
                         
              <th style="text-align: center">Action</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($data as $row)
            <tr>
                  
                <td style="text-align: center">{{ $row->category_id }}</td>
                <td style="text-align: center "><img src="{{asset($row->image)}}" alt="" width="50px">
                <td style="text-align: center">{{ $row->name }}</td>
                <td style="text-align: center">{{ $row->slug }}</td>
                <td style="text-align: center">{{ $row->description }}</td>
                <td style="text-align: center">{{ $row->content }}</td>
                <td style="text-align: center ">
                  <div class="row">
                      <span class="col">
                          <?= number_format($row->price, 0, ',', '.') . "đ"; ?>
                      </span>
                  </div>
                </td> 
                <td style="text-align: center ">
                  <div class="row">
                    <span style=" text-decoration: line-through;" class="col">
                      <?= number_format($row->discount, 0, ',', '.') . "đ"; ?>
                  </span>
                  </div>
                </td> 
              <td style="text-align: center">{{ $row->sku }}</td>
              <td style="text-align: center">{{ $row->featured }}</td>
                <td style="text-align: center">
                  <a href="{{ route('product.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('product.delete', $row->id) }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection