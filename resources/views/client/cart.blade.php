@extends('layouts.app')
@push('styles')
<style>
  .qty-input {
    width: 28px;
    background: #fff;
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
  @livewire('client.cart-component')
</div>
@endsection
{{-- @push('scripts')
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
@endpush --}}