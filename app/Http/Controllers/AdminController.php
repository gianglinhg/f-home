<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;

class AdminController extends Controller
{
    function dashboard(){
        $product_count = Product::count();
        $cus_count = Category::count();
        $order_count = Order::count();
        $orderdetail_count = OrderDetail::count();
        return view('admin/dashboard', compact('product_count','cus_count','order_count','orderdetail_count'));
    }
    function login(){
    return view("admin/login");
    }
    function forgot(){
    return view("admin/forgot-password");
    }

}
