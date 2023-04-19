<div>
    <div class="container">
        <div class="row" style="column-gap: 44px">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
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
                                <th>
                                    <span class="icon-delete" style="cursor: pointer;" wire:click='emptyCart'>
                                        <i class="fa-solid fa-trash-can" style="color:red"></i>
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 0 @endphp
                            @if(Cart::content()->count() > 0)
                            @foreach(Cart::content() as $key => $item)
                            <tr class="item">
                                <td>{{++$i}}</td>
                                <td>
                                    <div class="item-image">
                                        <img src="{{asset('asset/images/products/' . $item->model->image)}}" alt="">
                                    </div>
                                </td>
                                <td>{{$item->name}}</td>
                                <td class="new-price">{{number_format($item->price,0, ",", ",")}}</td>
                                <td class="d-flex justify-content-center align-items-center"
                                    style="column-gap:2px;border:none;">
                                    <span style="cursor: pointer" wire:click="decreaseQuantity('{{$item->rowId}}')"> <i
                                            class="fa-solid fa-minus"></i> </span>
                                    <input step="1" min="1" name="quantity" class="qty-input" size="4"
                                        value="{{$item->qty}}" type="button">
                                    <span style="cursor: pointer" wire:click="increaseQuantity('{{$item->rowId}}')"> <i
                                            class="fa-solid fa-plus"></i> </span>
                                </td>
                                <td class="item-total">
                                    {{$item->subtotal()}}VNĐ
                                </td>
                                <td>
                                    <span class="icon-delete" style="cursor: pointer;"
                                        wire:click='deleteCart("{{$item->rowId}}")'>
                                        <i class="fa-solid fa-trash" style="color:red"></i>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6">Giỏ hàng hiện đang trống, <a href="{{route('shop')}}" class="non-a">Mua
                                        sắm ngay</a>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <div class="aboutimg">
                    <table class="table table-bordered">
                        @if(auth()->check())
                        <tr>
                            <th>Phí vận chuyển</th>
                            @if($ship)
                            <td class="ship">{{number_format($ship, 0 ,",", ",")}}VNĐ </td>
                            @else
                            <td>Miễn phí</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Tổng tiền</th>
                            <td class="total">{{Cart::total() }}VNĐ</td>
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
    {{-- @push('scripts')
    <script>
        $(document).ready(function () {
            $('input[name="quantity"]').on('change',function(){
                const rowId = $(this).data('rowId');
                const qty = $(this).val();
                $(this).attr('wire:change.prevent', 'changeQuantity(' + rowId + ',' + qty + ')');
            })
        });
    </script>
    @endpush --}}
</div>