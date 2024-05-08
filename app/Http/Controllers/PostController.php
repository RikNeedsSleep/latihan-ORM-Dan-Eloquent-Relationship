<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function tampilkanHalamanProduk()
    {
        return view('layouts.products');
    }

    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }


    public function showAllProducts()
    {
        $products = Post::latest()->paginate(10);
        return view('layouts.products', compact('products'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ]);

        $post = new Post();
        $post->image = $request->image;
        $post->name = $request->name;
        $post->berat = $request->berat;
        $post->harga = $request->harga;
        $post->stok = $request->stok;
        $post->kondisi = $request->kondisi;
        $post->deskripsi = $request->deskripsi;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Product created successfully');
    }

    public function edit($id) {
        
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }    
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ]);

        $post = Post::find($id);
        $post->name = $request->name;
        $post->image = $request->image;
        $post->berat = $request->berat;
        $post->harga = $request->harga;
        $post->stok = $request->stok;
        $post->kondisi = $request->kondisi;
        $post->deskripsi = $request->deskripsi;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }


    public function delete(Request $request, $id) {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }

    public function merchant()   
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.merchant', compact('posts'));
    }
    public function showProfile()
{
    return view('posts.profile');
}


}
