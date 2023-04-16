<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use DB;

class OrdersController extends Controller
{
     function index(){
        $list = DB::table('orders')->orderBy('created_at', 'desc')->Paginate(20);
        $customers = DB::table('users')->select('name', 'id')->get();

        $data = ['list' => $list, 'customers' => $customers];
        return view("admin.order.index", $data);
    }
    function detail($id){
        $list = DB::table('order_details')->where('order_id', $id)->get();
        $pd_list = DB::table('products')->select('name', 'id')->get();
        $data = ['list' => $list, 'pd_list' => $pd_list];
        return view("admin.order.detail", $data);
    }
    public function filter(Request $request)
    {
        $customers = DB::table('users')->select('name', 'id')->get();

        $status = $request->input('status');
        $arrange = $request->input('arrange');
        $code = $request->input('code');

        $query = DB::table('orders');


        if ($status) {
            $query->where('status', $status);
        }
        if ($code) {
            $query->where('code', $code);
        }
        if ($arrange == 'newest') {
            $query->orderBy('updated_at', 'desc')->limit(10);
        } else if ($arrange == 'oldest') {
            $query->orderBy('updated_at', 'asc')->limit(10);
        }

        $list = $query->get();

        $html = view('Modals.back_end.order_load')
            ->with(['list' => $list,'customers' => $customers ])
            ->render();
        return response()->json(['BODY' => $html]);
    }

    public function update_status(Request $request, $id){
        $cart = orders::find($id);
        if ($cart) {
            $cart->update([
                'status' => $request->status,
            ]);
        }
        return response()->json([]);

    }
}
