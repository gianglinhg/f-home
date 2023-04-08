@extends('layouts.admin')
 
@section('title', 'Order')
 
@section('content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng</h6>
    </div>
    <div class="card-body">
           
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              
                <th style="text-align: center"><span>ID</span></th>
                <th style="text-align: center"><span>ID người mua</span></th>
                <th style="text-align: center"><span>Tên</span></th>
                <th style="text-align: center"><span>Số điện thoại</span></th>
                <th style="text-align: center"><span>Địa chỉ</span></th>
                <th style="text-align: center"><span>Mã đơn hàng</span></th>
                <th style="text-align: center"><span>Trạng thái</span></th>
                <th style="text-align: center"><span>Ghi chú khách</span></th>
                <th style="text-align: center"><span>Ghi chú admin</span></th>
                <th style="text-align: center"><span>Tổng</span></th>
                <th style="text-align: center"><span>Ngày tạo</span></th>
                <th style="text-align: center"><span>Hành động</span></th>
            </tr>
          </thead>
          <tbody>
            
              @foreach($list as $item)
                        <tr style="text-align: center">
                            <th class="text-muted">{{$item->id}}</th>
                            <th class="text-muted">{{$item->user_id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->code}}</td>
                            <td>
                                <select data-id="{{$item->id}}" onchange="update_status({{$item->id}})" id="status"
                                        name="status" class="form-control status-change">
                                    <option <?php if ($item->status == "Chờ xác nhận") {
                                        echo "selected";
                                    } ?>value="Chờ xác nhận">Chờ xác nhận
                                    </option>
                                    <option <?php if ($item->status == "Đang giao hàng") {
                                        echo "selected";
                                    } ?> value="Đang
                                    giao hàng">Đang Giao Hàng
                                    </option>
                                    <option <?php if ($item->status == "Giao thành công") {
                                        echo "selected";
                                    } ?>
                                            value="Giao thành công">Giao Thành Công
                                    </option>
                                </select>
                            </td>
                            
                            <td>{{$item->note}}</td>
                            <td>{{$item->admin_note}}</td>
                            <td>{{$item->total}}</td>
                <td>
                    <span class="w_content">
                        {{date('H:i:s d-m-Y', strtotime($item->created_at))}}
                    </span>
                </td>
                <td>
                    <button class="w_content label-success text-white border-0">
                        <a href="/admin/order/detail/{{$item->id}}">Xem chi tiết</a>
                    </button>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
