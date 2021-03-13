<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductsImport;
use App\Exports\ProductsExport;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        // return Product::orderBy('order')->get();
        return view('products', ['products' => Product::orderBy('order')->get()]);
    }

    public function fileImportProducts(Request $request) 
    {
        
        if($request->hasFile('file')) {
            Product::truncate();
            $path1 = $request->file('file')->store('temp'); 
            $path = storage_path('app').'/'. $path1;  
            Excel::import(new ProductsImport, $path);
            return back();
        } return "test";
    }

    public function fileExportProducts() 
    {
        return \Excel::download(new ProductsExport, 'users-collection.xlsx');
    }  
}
