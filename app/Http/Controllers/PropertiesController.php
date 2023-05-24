<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Properties;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = DB::table('properties')
        ->join('categories', 'properties.category_id', '=', 'categories.id')
        ->select('categories.*', 'properties.*')
        //->where('properties.category_id', '=', $id)
        ->get();
       // $properties = Properties::orderBy('created_at', 'desc')->get();
         //  $categoryName = $properties->category_id;
        $pageName = "Thuộc Tính";
        return view('products.properties_product.properties', compact('pageName', 'result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('products.properties_product.create_properties', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'propertiesName' => 'required',
            
        ]);
        $properties = new Properties;
        $properties->propertiesName = $request['propertiesName'];
        $properties->category_id= $request['category'];
        $properties->save();
        
        return redirect()->route('properties.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {  
        $properties = Properties::find($id);
       
        $categories = Category::orderBy('created_at', 'desc')->get();     
        return view('products.properties_product.edit_properties', compact('properties','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $properties = Properties::find($id);
        $properties->propertiesName = $request['propertiesName'];
        $properties->category_id = $request['category'];
        $properties->save();
        return redirect()->route('properties.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $properties = Properties::find($id);
        $properties->delete();
        return redirect()->route('properties.index');
    }
}