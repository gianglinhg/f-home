<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cart(){
        $cart = session()->get('cart');
        $total = 0;
        $ship = 0;
        if($cart){
            foreach($cart as $item){
                $total += ($item['price'] * $item['quantity']);
            }
            $ship = $total < 2000000 ? 50000 : 0;
        }
        return view('client.cart', compact('total', 'ship'));
    }
    public function storeCart(Request $request){
        $id = $request->id;
        $product = Product::findOrFail($id);
        $cart = session()->get('cart');
        if(isset($cart[$id]))
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + (int)($request->quantity ?? 1);
        else{
            $cart[$id] = [
                'id' => $id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->images[0]->path,
                'quantity' => $request->quantity
            ];
        }
        session()->put('cart',$cart);
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'Thêm sản phẩm vào giỏ hàng thành công'
        ]);
    }
    public function updateCart(Request $request){
        $id = $request->id;
        $price = Product::find($request->id)->price;
        $cart = session()->get('cart');
        $cart[$id]['quantity'] = $request->quantity;
        session()->put('cart',$cart);
        return response()->json([
            'price' => $price,
            'success' => true,
            'code' => 200
        ]);
    }
    public function deleteCart(Request $request){
        $id = $request->id;
        $cart = session()->get('cart');
        $cart = session()->forget($cart[$id]);
        session()->put('cart', $cart);
        return response()->json(['success' => true,
        'code' => 200]);
    }
}
