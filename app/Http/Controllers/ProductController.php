<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\CategoryController;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index',[
            'product' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create',[
            'category' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('price', $request->price);
        Session::flash('stock', $request->stock);
        Session::flash('description', $request->description);
        $payload = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'required|image',
            'description' => 'required',
            'category_id' => 'required',
        ],[
            'name.required' => 'Nama wajib diisi',
            'price.required' => 'Harga wajib diisi',
            'price.numeric' => 'Harga harus berbentuk angka',
            'stock.required' => 'Stock wajib diisi',
            'stock.numeric' => 'Stock harus berbentuk angka',
            'image.required' => 'Gambar wajib diisi',
            'image.image' => 'File hanya berbentuk image',
            'description.required' => 'Deskripsi wajib diisi',
        ]);

        $name_image_path = $request->file('image')->store('product-images', 'public');
        $payload['image'] = $name_image_path;

        product::create($payload);
        return redirect() -> to('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payload = product::where('id',$id)->first();
        return view('product.edit', [
            'category' => Category::all(),
        ])->with('payload',$payload);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payload = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'image',
            'description' => 'required',
            'category_id' => 'required',
        ],[
            'name.required' => 'Nama wajib diisi',
            'price.required' => 'Harga wajib diisi',
            'price.numeric' => 'Harga harus berbentuk angka',
            'stock.required' => 'Stock wajib diisi',
            'stock.numeric' => 'Stock harus berbentuk angka',
            'image.image' => 'File hanya berbentuk image',
            'description.required' => 'Deskripsi wajib diisi',
        ]);

        $name_image_path = $request->file('image') == null ? '' : $request->file('image')->store('product-images', 'public');
        $payload['image'] = $name_image_path;

        product::where('id',$id)-> update($payload);
        return redirect() -> to('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::where('id',$id)->delete();
        return redirect() -> to('product');
    }
}
