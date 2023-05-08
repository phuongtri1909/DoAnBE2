<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $properties = Properties::orderBy('created_at', 'desc')->get();
           
        $pageName = "Thuộc Tính";
        return view('products.properties_product.properties', compact('pageName', 'properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.properties_product.create_properties');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'propertiesName' => 'required|unique:properties',
        ]);
        $properties = new Properties;
        $properties->propertiesName = $request['propertiesName'];
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
        return view('products.properties_product.edit_properties', compact('properties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $properties = Properties::find($id);
        $properties->propertiesName = $request['propertiesName'];
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