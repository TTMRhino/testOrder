<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $Product)
    {
      
        $a_data = json_decode( $Product->data);
        
       
        return view('edit',['product' => $Product, 'a_data' => $a_data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductsRequest $request, Products $Product)
    {
        
        /*$id = Products::where('id',$Product->id)->first();       

       $validator =  Validator::make($request->all(), [
            'name' => 'required|min:10|max:40',
            'article' =>[
                'required',
                'regex:/^[a-z0-9]+$/i',
                Rule::unique('products')->ignore($id->id),
            ]
        ]);


        if($validator->fails()){
            return response($validator->messages(), 200);
        } else {

            Helpers::storeServer($request);

            return response()->json([
                'message'=> ['Server Stored']
            ]);
        }*/



        $data = [
            'Size' => $request->Size,
            'Color' => $request->Color
        ];

        $Product->data = json_encode($data, JSON_PRETTY_PRINT);
        $Product->name = $request->name;
        $Product->status = $request->status;
        $Product->article = $request->article;
        $Product->save();       

        return redirect()->back()->withSuccess('Product '. $Product->name .' edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $Product)
    {
       
        $Product->delete();

        return redirect()->back()->withSuccess("Product " .$Product->name. " deleted successfully!");
    }
}
