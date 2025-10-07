<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
        public function index()
    {
        $products = Product::all();
        $totalProducts = $products->count();
        return view('pages.admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('pages.admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = $request->only(['name', 'price', 'description']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('admin.product.index')
            ->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ]);
        }

        $product = Product::findOrFail($id);
        $data = $request->only(['name', 'price', 'description']);

        $product->update($data);

        return redirect()->route('admin.product.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('admin.product.index')
            ->with('success', 'Product deleted successfully');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.admin.product.show', compact('product'));
    }
}

