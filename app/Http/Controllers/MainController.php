<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class MainController extends Controller
{
    public function home(){
        $new_products = Product::latest()->limit(4)->get();
        // dd($new_products[0]->image);
        return view("client.home",compact('new_products'));
    }

    public function filter(Request $request){
        $params = $request->only(['category', 'sort','name']);
        $params = array_filter($params, function ($value) {
            return !is_null($value) && $value != 0;
        });
        $url = '/shop?' . http_build_query($params);
        return redirect($url);
    }

    public function shop(Request $request){
        $products = Product::query();
            if(!empty($request->category)){
                $category = Category::where('name',$request->category)->first();
                $products = Product::where('category_id', $category->id);
            }
            if(!empty($request->sort)){
                if($request->sort === "gia-thap-cao")
                    $products = Product::orderBy('price','asc');
                else if ($request->sort === "gia-cao-thap")
                    $products = Product::orderBy('price','desc');
                else if ($request->sort === "ten-A-Z")
                    $products = Product::orderBy('name','asc');
                else if ($request->sort === "ten-Z-A")
                    $products = Product::orderBy('name','desc');
            }
            if(!empty($request->name)){
                $products = Product::where('name','like','%'. $request->name .'%');
            }
        $products = $products->paginate(9);
        $categories = Category::all();
        return view("client.shop",compact('products','categories'));
    }

    public function product($slug){
        $product = Product::where('slug',$slug)->first();
        session()->put('product_id', $product->id);
        return view("client.product",compact('product'));
    }
    public function contact(){
        dd(session()->get('cart'));
        return view("client.contact");
    }
    public function about(){
        return view("client.about");
    }

}
