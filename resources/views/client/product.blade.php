@extends('layouts.app')
@section('content')
<div class="layout_padding-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="img_box">
                    <figure><img src="{{asset('asset/images/products/' . $product->images[0]->path)}}" alt="#" />
                    </figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 product_detail_side">
                <div class="abotext_box">
                    <div class="product-heading">
                        <h2>{{$product->name}}</h2>
                    </div>
                    <div class="product-detail-side">
                        <span><del>$679.89</del></span><span class="new-price">{{$product->price}}</span>
                        <span class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                        <span class="review">({{$product->comments->count()}} customer review)</span>
                    </div>
                    <div class="detail-contant">
                        <p>
                            {!! $product->description !!}
                            {{-- <br><span class="stock">2 in stock</span> --}}
                        </p>

                        {{-- @livewire('client.cart-component') --}}
                        <form class="cart" method="post">
                            <div class="quantity">
                                <input step="1" min="1" max="5" name="quantity" value="1" class="input-text qty text"
                                    size="4" type="number">
                            </div>
                            <button type="submit" class="bt_main bt_submit" data-id="{{$product->id}}">Add to
                                cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="tab_bar_section">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab"
                                    href="#description">Description</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews
                                    ({{$product->comments->count()}})</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="description" class="tab-pane active">
                                <div class="product_desc">
                                    {!! $product->content !!}
                                </div>
                            </div>
                            <div id="reviews" class="tab-pane fade">
                                @livewire('client.comment-component',['product' => $product])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        $('.bt_submit').on('click',function(e){
            e.preventDefault();
            const id =  $(this).data('id');
            const quantity = $('input[name="quantity"]').val();
            $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
            $.ajax({
                url: "{{ route('store-cart') }}",
                method: 'post',
                data: {id, quantity},
                success: function(res){
                    alert(res.message)
                },
                error: function(error){
                    console.log(error);
                }
            })
        });
        });
</script>

@endpush