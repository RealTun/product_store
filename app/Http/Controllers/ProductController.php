<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }
 
    public function create()
    {
        return view("admin.products.add");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image'=> 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            if (
                strcasecmp($extension, 'jpg') === 0
                || strcasecmp($extension, 'png' === 0)
                || strcasecmp($extension, 'jpeg') === 0
            ) {
                $image = time() . '_' . $name_file;

                $file->move(public_path('image/product/'), $image);
            }
        }

        Product::create([
            'product_name' => $request->name,
            'product_description' => $request->description,
            'price' => $request->price,
            'photo' => $image,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Create product successful');
    }

    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            if (
                strcasecmp($extension, 'jpg') === 0
                || strcasecmp($extension, 'png' === 0)
                || strcasecmp($extension, 'jpeg') === 0
            ) {
                $image = time() . '_' . $name_file;

                $file->move(public_path('image/product/'), $image);
            }
        }

        $product = Product::find($id);
        $product->update([
            'product_name' => $request->name,
            'product_description' => $request->description,
            'price' => $request->price,
            'photo' => isset($image) ? $image : $product->photo,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Update product successful');
    }

    public function delete(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Delete product successful');
    }
}
