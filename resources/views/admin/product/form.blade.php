@extends('layouts.admin')
 
@section('title', 'Form product')
 
@section('content')
<form action="{{ isset($product) ? route('product.update', $product->id) : route('product.save') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($product) ? 'Form Edit product' : 'Form plus product' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="category_id">Category_id</label>
              <input type="text" class="form-control" id="category_id" name="category_id" value="{{ isset($product) ? $product->category_id : '' }}">
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ isset($product) ? $product->name : '' }}">
            </div>
            <div class="form-group">
              <label for="slug">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" value="{{ isset($product) ? $product->slug : '' }}">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" id="description" name="description" value="{{ isset($product) ? $product->description : '' }}">
            </div>
            <div class="form-group">
              <label for="description">Content</label>
              <input type="text" class="form-control" id="content" name="description" value="{{ isset($product) ? $product->content : '' }}">
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" class="form-control" id="price" name="price" value="{{ isset($product) ? $product->price : '' }}">
            </div>
            <div class="form-group">
              <label for="price">Discount</label>
              <input type="number" class="form-control" id="discount" name="discount" value="{{ isset($product) ? $product->discount : '' }}">
            </div>
            <div class="form-group">
              <label for="description">Sku</label>
              <input type="text" class="form-control" id="sku" name="sku" value="{{ isset($product) ? $product->sku : '' }}">
            </div>
            <div class="form-group">
              <label for="description">Featured</label>
              <input type="number" class="form-control" id="featured" name="featured" value="{{ isset($product) ? $product->featured : '' }}">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Image:</strong>
                  <input type="file" name="image" class="form-control" id="image" placeholder="image" value="{{ isset($product) ? $product->image : '' }}">
              </div>
          </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection