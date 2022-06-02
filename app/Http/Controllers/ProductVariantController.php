<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\DB;

class ProductVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('variant.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $products  = Product::find($id);
        return view('variant.create');

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
            
            'product_id'=>'required',
            'web_product_code'=>'required',
            'name'=>'required',
            
        ]);

        $variant = new ProductVariant;
        $variant->product_id = $request->input('product_id');
        $variant->sap_product_code = $request->input('sap_product_code');
        $variant->web_product_code = $request->input('web_product_code');
        $variant->name = $request->input('name');
        
        $variant->save();

        return redirect('products');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function getProductId($id)
        {
            $products  = Product::find($id);
                return view('variant.create', compact('products'));
        }


        // public function getProductVariants(ProductVariant $varproduct)
        // {
        //     return view('product.show', compact('varproduct'));
        // }
    public function show($id)
    {
        //
        $products  = Product::find($id);
        return view('variant.create', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
