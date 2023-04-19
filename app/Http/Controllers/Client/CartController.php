<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function cart()
    {
        return view('client.cart', ['title' => 'Giỏ hàng của bạn']);
    }
    public function storeCart(Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);
        Cart::add($id, $product->name, $request->quantity, $product->price, 0)
            ->associate('\App\Models\Product');
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'Thêm sản phẩm vào giỏ hàng thành công'
        ]);
    }
}