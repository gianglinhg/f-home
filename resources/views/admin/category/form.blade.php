@extends('layouts.admin')
 
@section('title', 'Form Category')
 
@section('content')
  <form action="{{ isset($category) ? route('category.update', $category->id) : route('category.save') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($category) ? 'Form Edit Category' : 'Form add Category' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama">Name Category</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ isset($category) ? $category->name : '' }}">
            </div>
            <div class="form-group">
                <label for="nama">Slug</label>
                <input type="text" class="form-control" id="name" name="slug" value="{{ isset($category) ? $category->slug : '' }}">
            </div>
            <div class="form-group">
              <label for="nama">Parent_id</label>
              <input type="text" class="form-control" id="name" name="parent_id" value="{{ isset($category) ? $category->parent_id : '' }}">
          </div>
          <div class="form-group">
            <label for="nama">Featured</label>
            <input type="text" class="form-control" id="name" name="featured" value="{{ isset($category) ? $category->featured : '' }}">
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