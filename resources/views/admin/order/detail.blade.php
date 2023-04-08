@extends('layouts.admin')
 
@section('title', 'Order Detail')
 
@section('content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Đơn Hàng</h6>
    </div>
    <div class="card-body">
           
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><span>ID</span></th>
                    <th><span>ID đơn hàng</span></th>
                    <th><span>Sản phẩm</span></th>
                    <th><span>Số lượng</span></th>
                    <th><span>Đơn giá</span></th>
                    <th><span>Tổng phụ</span></th>
                    <th><span>Ngày tạo</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                <tr>
                    <th class="text-muted">{{$item->id}}</th>
                    <td>{{$item->order_id }}</td>
                    <td>
                        @foreach($pd_list as $pd)
                        @if($pd->id == $item->product_id)
                        {{$pd->name}}
                        @endif
                        @endforeach
                    </td>
                    <td>{{$item->quantity}}</td>
                        <td>
                            <?=number_format($item->price, 0, ",", ".")?>
                        </td>
                        <td>
                            <?=number_format($item->price * $item->quantity, 0, ",", ".")?>
                        </td>
                        <td>
                            <span class="w_content">
                                {{date('H:i:s d-m-Y', strtotime($item->created_at))}}
                            </span>
                        </td>
                
                </tr>
                @endforeach
          </tbody>
        </table>
      </div>
    </div>
    {{--
        <?php--}}
        {{--                $total = $news_list->total();--}}
        {{--                $pages = ceil($total / $news_list->perPage());--}}
        {{--                ?>--}}
  </div>
@endsection