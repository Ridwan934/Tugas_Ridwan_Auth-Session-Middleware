<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index () {
        $produk = product::query()
                    ->get();
            return view('data', [
                'product' => $produk
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
    public function edit (){
        $produk = Product::findOrFail($id);
        return view ('edit', compact('product'));
    }  
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $produk = Product::findOrFile($id);
        $produk->update([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        return redirect()->route('index');
    }
    public function show(Product $produk)
    {
        return view('/show', compact('produk'));
    }
    public function destroy ($id){
    $produk = Product::findOrFail($id);
    $produk->delete();
    return redirect()->route('index')
    ->with ('succes', 'deleted successfully');
    }
}