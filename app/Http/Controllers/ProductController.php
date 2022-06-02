<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();
        // $categories = DB::table('categories');
        return view('product.index')->with('products' ,$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('product.create', compact('categories'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
         $this->validate($request,[
            'name'=>'required',
            'category_id'=>'required',
            
        ]);

        $product = new Product;
        $product->name = $request->input('name');
        $product->slug = Str::slug($request->input('slug'));;
        
        $product->save();

        $categoryId = $request->input('category_id');
        $product->category()->attach($categoryId);

        return redirect('products');
    }

    public function getProductVariants(Product $product )
    {
        return view('product.show', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $single =  Product::where('slug', $product)->first();
        // return response()->json(array('data' => $single));
        $product = Product::find($id);
        return view('product');


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Category::all();
        $prod = Product::findOrFail($id);
        $cats = array();
        foreach ($cat as $category)
        {
            $cats [$category->id] = $category->name;
        }
        return view('product.edit')->with('prod',$prod)->with('cats',$cats);
        // return view('product.edit', compact('prod','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
           
            
        ]);

        $product = Product::find($id);

        $product->name = $request->input('name');
        $product->slug = Str::slug($request->input('slug'));;
        
        $product->update();

        $categoryId = $request->input('category_id');
        $product->category()->attach($categoryId);

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
    
        return back()->with('success','Item deleted successfully!');
    }
}
