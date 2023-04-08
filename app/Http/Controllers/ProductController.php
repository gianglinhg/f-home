<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use Arr;
 
class ProductController extends Controller
{
    public function index()
    {
        $product = product::get();
 
        return view('admin.product.index', ['data' => $product], );
    }
 
    public function add()
    {
        $category = category::get();
     
        return view('admin.product.form', ['category' => $category]);
    }
 
    public function save(Request $request)
    {
        $data = [
            'category_id'=> $request->category_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'content'=>$request->content,
            'price' => $request->price,
            'discount' => $request->discount,
            'image' => $request->image,
            'sku' => $request->sku,
            'featured'=>$request->featured
            
        ];
 
        product::create($data);
 
        return redirect()->route('product');
    }
 
    public function edit($id)
    {
        $product = product::find($id);
        $category = category::get();
 
        return view('admin.product.form', ['product' => $product, 'category' => $category]);
    }
 
    public function update($id, Request $request)
    {
        $data = [
            'catagory_id' => $request->catagory_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'content'=>$request->content,
            'price' => $request->price,
            'discount' => $request->discount,
            'image' => $request->image,
            'sku' => $request->sku,
            'featured'=>$request->featured
        ];
        product::find($id)->update($data);
 
        return redirect()->route('product');
    }
 
    public function delete($id)
    {
        product::find($id)->delete();

        return redirect()->route('product');
    }
}
