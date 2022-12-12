<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index () {
        $product = product::query()
                    ->get();
            return view('data', [
                'product' => $product
            ]);
    }
    public function create () {
        return view ('/Create');
    }
    public function Store (Request $request) {
        $created = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image'=> $request->file('image')->store('imsges', 'public')

        ];
        
        product::query()->create($created);
        return redirect('data');
    }
    public function edit ($id){
        $product = product::findOrFail($id);
        return view ('edit', compact('product'));
    }  
    public function update(Request $request, $id)
    {
        //  () 
        // [
        //     'name' => $request->input('name'),
        //     'description' => $request->input('description'),
        //     $path = public_path().'/storage'.'/'.$product->image,
        //     unlink($path),
        // ];
       
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'image' => 'required',
        // ]);
        // $product = product::findOrFile($id);
        // $product->update([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'image' => 'required',
        // ]);
        return redirect()->route('data');
    }
    public function show(product $produk)
    {
        return view('/show', compact('produk'));
    }
    
    public function destroy ($id){
    $product = product::findOrFail($id);
    $path = public_path().'/storage'.'/'.$product->image;
    unlink($path);
    $product->delete();
    return redirect()->route('data');
    }
}