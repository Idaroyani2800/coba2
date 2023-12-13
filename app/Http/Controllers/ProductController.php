<?php

namespace App\Http\Controllers;

//import Model "Post"
use App\Models\Product;

use Illuminate\View\View;

use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * index
     * 
     * @return View
     */
    public function index(): View
    {
        //get products
        $products = Product::latest()->paginate(5);

        //render view with products
        return view('products.index', compact('products'));

    }
    public function create(): View
    {
        return view('products.create');
    }

    public function tampil(): View 
    {  
        $products = Product::latest()->paginate(5);

        //render view with products
        return view('tampil', compact('products'));
    }
    public function show(string $id): View 
    {
        $products = Product::findOrFail($id);

        return view('products.show', compact('products'));
    }
    public function destroy( $id): RedirectResponse
    {
        //get product by ID
        $products = Product::findOrFail($id);

        //delete image
        Storage::delete('public/products/'.$products->image);

        //delete product
        $products->delete();

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function edit(string $id): View 
    {
        $products = Product::findOrFail($id);

        return view('products.edit', compact('products'));
    }


    public function update(Request $request,$id): RedirectResponse
    {
         //validate form
         $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        //get product by id
        $products = Product::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());
            
            //delete old image
            Stotrage::delete('public/products/', $product->image);

            //update product with new image
            $product->update([
                    'image' => $image->hashName(),
                    'title' => $request->title,
                    'content' => $request->content
                ]);
            } else {
                //update product without image
                $product->update([
                    'title' => $request->title,
                    'content' => $request->content
                ]);
            }
              //redirect to index
              return redirect()->route('products.index')->with(['success' => 'Data
              Berhasil Diubah!']);

            }

    public function store(Request $request): RedirectResponse
    
    {


    
        //validate form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
            //upload image
            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());

            //create post
            Product::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content
        ]);
            //redirect to index
            return redirect()->route('products.index')->with(['success' => 'Data
            Berhasil Disimpan!']);
            }
            public function search (Request $request){
             $search = $request->search;
             $products = DB::table('products')
             ->where ('title','like',"%".$search."%")
             ->paginate();
             return view('tampil', compact('products'));
            }
    }
   
