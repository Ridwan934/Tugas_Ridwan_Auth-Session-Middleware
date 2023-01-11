<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index () {
        $product = product::query() //nagasih tau laravel klo kita mau pake query
                    ->get();
            return view('data', [
                'product' => $product //
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
        // dd($created);
        product::query()->create($created);
        return redirect('/');
    }
    public function edit ($id){
        $product = product::findOrFail($id);
        return view ('/edit', compact('product'));
    }  
    public function update(Request $request, $id)
    {
        $product = product::findOrfail($id);
        // $product->update($request->all());
        
        
        $product->name = $request->name;
        $product->description = $request->description;
        $image = $request->file('image');
        if (isset($image)){ //pengecekan ada tidaknya gambar, jika ada maka dilanjut ke codingan dibawah ini, jika tidak uplod loncat ke save. tujuan kodingan if ini biar kalo edit tanpa uplod tetap bisa diproses tanpa eror
            $product->image= $request->file('image')->store('imsges', 'public');
        }
       
        // $product->image = $request->image;
        $product->save();

        
        // if ($request ->image !=null)
        // {
        //     $img = $request->file('image');
        //     $filename = time() ."_". $img->getClientOrginalName();
        //     $img->move('img', $filename);
        //     product::where('id', $product->id)->update(
        //     [
        //         "name" => $request->name,
        //         "description" => $request->description,
        //         "image" => $filename,
        //     ]);
        // } else
        // {
        //     product::where('id', $product->id)->update(
        //         [
        //             "name" => $request->name,
        //             "description" => $request->description,
                   
        //         ]);
        // }


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