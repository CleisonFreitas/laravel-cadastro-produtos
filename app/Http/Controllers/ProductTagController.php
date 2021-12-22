<?php

namespace App\Http\Controllers;

use App\Models\Product_tag;
use App\Http\Resources\ProductTagResource;
use App\Http\Requests\ProductTagRequest;
use Exception;
use Illuminate\Http\Request;

class ProductTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductTagResource::collection(Product_tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductTagRequest $request)
    {
        try{

            $product_tag = Product_tag::create($request->all());

        }catch(Exception $e){
            return response()->json($e->getMessage());
        }
        return new ProductTagResource($product_tag);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_tag  $product_tag
     * @return \Illuminate\Http\Response
     */
    public function show(Product_tag $product_tag)
    {
        return new ProductTagResource($product_tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_tag  $product_tag
     * @return \Illuminate\Http\Response
     */
    public function update(ProductTagRequest $request, $id)
    {
        $product_tag = Product_tag::findOrfail($id);
        $product_tag->update($request->all());

        return new ProductTagResource($product_tag);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_tag  $product_tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_tag = Product_tag::findOrfail($id);

        return response()->json('The register has been deleted!');

    }
}
