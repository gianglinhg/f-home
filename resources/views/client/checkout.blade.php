@extends('layouts.app')
@push('styles')
<style>
  .table-checkout tr th {
    width: 30%;
  }
</style>
@endpush
@section('content')
<div class="contactus">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="title">
          <h2>Thanh toán</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="about">
  <div class="container">
    <form action="{{route('store.order')}}" method="post">
      @csrf
      <div class="row" style="column-gap: 88px">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 padddd">
          <form class="main_form">
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <input class="form-control disabled" placeholder="Tên" type="text" name="name" disabled
                  value="{{Auth::user()->name}}">
              </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <input class="form-control" placeholder="Email" type="text" name="email" disabled
                  value="{{Auth::user()->email}}">
              </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                @error('phone')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <input class="form-control" placeholder="Số điện thoại" type="text" name="phone">
              </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                @error('address')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <textarea class="textarea" placeholder="Địa chỉ nhận hàng" rows="1" type="text" name="address"
                  value="{{old('address')}}" style="padding-top: 14px"></textarea>
              </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                @error('note')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <textarea class="textarea" placeholder="Ghi chú đơn hàng" type="text" name="note"></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="col-xl-5 col-lg-4 col-md-4 col-sm-4">
          <div class="aboutimg">
            <table class="table table-bordered table-checkout">
              @if(auth()->check())
              <tr>
                <th>Sản phẩm</th>
                <td>
                  @foreach(Cart::content() as $item)
                  <div>{{$item->name}} x <strong>{{$item->qty}}</strong></div>
                  @endforeach
                </td>
              </tr>
              <tr>
                <th>Vận chuyển</th>
                <td>Miễn phí</td>
              </tr>
              <tr>
                <th>Tổng tiền</th>
                <td class="total">{{Cart::total() }}VNĐ</td>
              </tr>
              <tr>
                <th>Phương thức</th>
                <td>
                  <select name="payment_method" id="payment_method" class="form-control"
                    style="margin-bottom: 0;padding:0;">
                    <option value="cod">Tiền mặt</option>
                    <option value="vnpay">VNPAY</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <button type="submit" class="btn-submit">Đặt hàng</button>
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
    </form>
  </div>
</div>
@endsection
@push('scripts')

@endpush