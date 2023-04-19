@extends('layouts.app')
@push('styles')
<style>
  select.form-control {
    height: 54px !important;
  }

  .add-bt {
    cursor: pointer;
    border-color: #0fbbad;
  }
</style>
@endpush
@section('content')

<div class="ourproduct">
  <div class="container">
    <div class="row product_style_3">
      <div class="col-md-12 col-sm-12">
        <form action="{{route('filter')}}" method="POST" class="main_form">
          @csrf
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
              <select name="category" id="category" class="form-control">
                <option value="0">Theo danh mục</option>
                @foreach($categories as $category)
                <option value="{{$category->slug}}" @if($category->name == request()->category) selected
                  @endif>{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
              <select name="sort" id="sort" class="form-control">
                <option value="0">Mặc định</option>
                @foreach(config('client.sort') as $sort)
                <option value="{{$sort['slug']}}" @if($sort['slug']==request()->sort) selected @endif>
                  {{$sort['name']}}
                </option>
                @endforeach
              </select>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
              <input class="form-control" placeholder="Tìm kiếm theo tên" type="text" name="name">
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
              <button type="submit" class="send">Lọc</button>
            </div>
          </div>
        </form>
      </div>
      @forelse($products as $product)
      <!-- product -->
      <div class=" col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center">
              <img src="{{asset('asset/images/products/' . $product->image)}}" alt="{{$product->name}}" />
              <div class="overlay_hover">
                <a href="#" class="add-bt" data-id="{{$product->id}}">+ Add to cart</a>
              </div>
            </div>
          </div>
          <a href="{{route('product.detail',[$product->slug])}}">
            <div class="product_detail text_align_center">
              <p class="product_price">{{$product->price}}VNĐ
                @if($product->disccout)
                <span class="old_price">{{ $product->disccout}}VNĐ</span>
                @endif
              </p>
              <p class="product_descr">{{$product->name}}</p>
            </div>
            <a>
        </div>
      </div>
      @empty
      <p>Chưa có dữ liệu phù hợp</p>
      <!-- end product -->
      @endforelse
      {{$products->links('client.paginate')}}
    </div>
  </div>
</div>
@endsection
@push('scripts')
<script>
  $(document).ready(function () {
    $(".add-bt").on("click", function (e) {
        e.preventDefault();
        const id = $(this).data("id");
        const quantity = 1;
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "{{ route('store-cart') }}",
            method: "post",
            data: { id, quantity },
            success: function(res){
              alert(res.message)
            },
            error: function(error){
              console.log(error);
            }
            });

    });
});

</script>
@endpush