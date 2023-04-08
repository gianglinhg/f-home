<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\category;
 
class CategoryController extends Controller
{
    public function index()
    {
        $category = category::get();
 
        return view('admin.category.index', ['category' => $category]);
    }
 
    public function add()
    {
        return view('admin.category.form');
    }
 
    public function save(Request $request)
    {
        $category = [
            'name' => $request->name,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
            'featured'=>$request->featured
        ];
        category::create($category);
 
        return redirect()->route('category');
    }
 
    public function edit($id)
    {
        $category = category::find($id);
        //echo "$category";
        return view('admin.category.form', ['category' => $category]);
    }
 
    public function update($id, Request $request)
    {
        $category = [
            'name' => $request->name,
            'slug' => $request->slug,
            'parent_id' => $request->sku,
            'featured'=>$request->featured
        ];
        category::find($id)->update($category);
 
        return redirect()->route('category');
    }
 
    public function delete($id)
    {
        category::destroy($id);
        return redirect()->route('category'); 
    }
}