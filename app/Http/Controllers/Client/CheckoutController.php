<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Cart;
use Str;
use Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        if (Cart::content()->count() <= 0 || !(Auth::check()))
            return redirect()->route('cart');
        return view("client.checkout", ['title' => 'Thanh toán đơn hàng']);
    }
    public function storeOrder(Request $request)
    {
        $request->validate(
            [
                'phone' => 'required | min: 10 | regex: "/^0/"',
                'address' => 'required',
                'note' => 'max: 1000',
            ],
            [
                'phone.required' => 'Số điện thoại buộc phải nhập',
                'phone.min' => 'Số điện thoại tối thiểu 10 kí tự',
                'phone.regex' => 'Số điện thoại bắt đầu là 0',
                'address.required' => 'Địa chỉ buộc phải nhập',
                'note.max' => 'Giới hạn note là 1000 kí tự'
            ]
        );
        $code = Str::upper(Str::random(10));
        $order = Order::create([
            'user_id' => Auth::id(),
            'address' => $request->address,
            'phone' => $request->phone,
            'code' => $code,
            'note' => $request->note,
            'total' => (int) Cart::total() * 1000
        ]);
        foreach (Cart::content() as $item) {
            $orderDetail = new OrderDetail();
            $orderDetail->product_id = $item->id;
            $orderDetail->order_id = $order->id;
            $orderDetail->quantity = $item->qty;
            $orderDetail->price = $item->price;
            $orderDetail->save();
            if ($orderDetail)
                Cart::remove($item->rowId);
        }
        if ($request->payment_method == 'vnpay')
            $this->vnpay($code, $order->total);
        return redirect('/');
    }
    public function storeVnpay(Request $request)
    {
        $order = Order::where('code', $request->vnp_OrderInfo)->first();
        if ($request->vnp_ResponseCode == "00") {
            $message = 'Đã thanh toán qua VNPAY';
        } else {
            $message = 'Thanh toán qua VNPAY bị lỗi';
        }
        $order->order_status = $message;
        $order->save();
        return redirect('/')->with('message', $message);
    }
    public function vnpay($code, $total)
    {
        dd($code, $total);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('store.vnpay');
        $vnp_TmnCode = "SU4WDJC6";
        $vnp_HashSecret = "NHHSCVPVJKEMJZNLOOLDTEHSNBFFFBSP";
        $vnp_TxnRef = (string) $code;
        $vnp_OrderInfo = $code;
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $total * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => 200,
            'message' => 'OK',
            'data' => $vnp_Url
        );
        header('Location: ' . $vnp_Url);
        die();
    }
}