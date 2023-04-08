@extends('layouts.app')
@push('styles')
<style>
  .qty-input {
    width: 55px;
    background: #fff;
    padding: 5px;
    font-weight: 400;
    color: #272727;
    border-color: #cecaca;
  }

  .item-image {
    width: 40px;
    margin: auto;
  }
</style>
@endpush
@section('content')
<div class="contactus">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="title">
          <h2>Giỏ hàng</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
        <div class="aboutimg">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
              </tr>
            </thead>
            <tbody>
              @php $i = 0 @endphp
              @if(session()->get('cart'))
              @foreach(session()->get('cart') as $key => $item)
              <tr class="item">
                <td>{{$i + 1}}</td>
                <td>
                  <div class="item-image">
                    <img src="{{asset('asset/images/products/' . $item['image'])}}" alt="">
                  </div>
                </td>
                <td>{{$item['name']}}</td>
                <td class="new-price">{{number_format($item['price'], 0, ",", ".")}}</td>
                <td>
                  <input step="1" min="1" name="quantity" value="{{$item['quantity']}}" class="qty-input" size="4"
                    type="number" data-id="{{$item['id']}}">
                </td>
                <td class="item-total" data-id="{{$item['id']}}" data-total="{{$item['price'] * $item['quantity']}}">
                  {{number_format($item['price'] * $item['quantity'],0, ",", ".")}}VNĐ
                </td>
                <td>
                  <span class="icon-delete" style="cursor: pointer;" data-bs-toggle="modal"
                    data-bs-target="#deleteModal" data-id="{{$item['id']}}">
                    <i class="fa-solid fa-trash" style="color:red"></i>
                  </span>
                </td>
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="6">Giỏ hàng hiện đang trống</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-12">
        <div class="aboutimg">
          <table class="table table-bordered">
            @if(auth()->check())
            <tr>
              <th>Phí vận chuyển</th>
              @if($ship)
              <td class="ship" data-ship="{{$ship}}">{{number_format($ship, 0, ",", ".")}}VNĐ</td>
              @else
              <td>Miễn phí</td>
              @endif
            </tr>
            <tr>
              <th>Tổng tiền</th>
              <td class="total" data-total="{{$total}}">{{number_format($total, 0, ",", ".")}}VNĐ</td>
            </tr>
            <tr>
              <td colspan="2">
                <a href="{{route('checkout')}}" style="margin-top: 0;max-width: none;">Mua hàng</a>
              </td>
            </tr>
            @else
            <tr>
              <th colspan="2">
                <a href="{{route('login')}}" style="margin-top: 0">Đăng nhập</a> để thanh toán
              </th>
            </tr>
            @endif
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('scripts')
<script>
  $(document).ready(function () {
    $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
    $('.qty-input').on('change',function(e){
      const quantity = $(this).val();
      const id = $(this).data('id');
        $.ajax({
            url: "{{ route('update-cart') }}",
            method: 'post',
            data: {id, quantity},
            success: function(res){
              var total = 0;
              $('.item-total').each(function() {
                total += Number($(this).attr('data-total'));
              })
              var ship = total < 2000000 ? "50.000" : "Miễn phí";
              $('.ship').text(ship);
              var totalFormat = total.toLocaleString('vi-VN');
              var itemTotal = res.price * quantity;
              var itemTotalFormat = itemTotal.toLocaleString('vi-VN');
              $('.total').text(String(totalFormat) + "VNĐ");
              $('.item-total[data-id="' + id + '"]').attr('data-total', itemTotal);
              $('.item-total[data-id="' + id + '"]').text(String(itemTotalFormat)+"VNĐ");

            },
            error: function(error){
                console.log(error);
            }
        })
    })
    $('.icon-delete').on('click',function(){
      const id = $(this).data('id');
        $.ajax({
            url: "{{ route('delete-cart') }}",
            method: 'post',
            data: {id},
            success: function(res){
              $('.icon-delete[data-id="' + id + '"]').closest('tr').remove();
            },
            error: function(error){
                console.log(error);
            }
        })
      })
  });
</script>
@endpush