<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use PhpParser\Node\Stmt\Catch_;

class CategoryController extends Controller
{

    public function addCategory()
    {     
      return view('products.category_product.add_category');
    }
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        $pageName = "Danh mục";
        return view('products.category_product.category', compact('pageName', 'categories'));
    }

    public function adminCreateCategory(Request $request)
    {
        $request->validate([
            'categoryName' => 'required|unique:categories',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("category")->withSuccess('Bạn đã thêm 1 danh mục');
    }

    public function create(array $data)
    {
        return Category::create([
            'categoryName' => $data['categoryName'],
        ]);
    }

    public function editCategory(Request $request)
    {
        $data = $request->all();
        $category = Category::findOrFail($data['idCategory']);
        return view('products.category_product.edit_category', compact('category'));
    }
    
    public function adminUpdateCategory(Request $request, $id){
    $category = Category::find($id);
    $category->categoryName = $request['categoryName'];
    $category->save();
       return redirect()->route('category');
    }
    
    public function delete(Request $request)
    {
        $category = Category::find($request['idCategory']);
        $category->delete();
        return redirect()->route('category');
    }

}