<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use Exception;
use Faker\Core\Number;
use App\Models\Tag;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\NumericString;
use Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Product', ['product' => Product::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        try{
            $product = Product::create($request->validated());
        }catch(\Exception $e){
            return response()->json('Erro ao tentar cadastrar',abort(404));
        }

        return redirect()->back()->with([toast()->success('Produto criado com sucesso!')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function edit($id){
        try{
            $product = Product::findorFail($id);
        }catch(\Exception $e){
            return response()->json('Produto não encontrado');
        }
            return view('edit_product',['product' => Product::find($id)],['tag' => Tag::all()]);
    }
    public function show(Product $product)
    {
        return view('create_product', ['tag' => Tag::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        try{
            $product = Product::find($id);

            $product->update($request->validated());

        }catch(\Exception $e){

            return response()->json($e->getMessage());
        }

        return redirect()->back()->with([toast()->info('Produto atualizado com sucesso!')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $product = Product::findOrfail($id);

            $product->delete();
        }catch(Exception $e){
            return response()->json($e->getMessage());
        }

        return redirect()->back()->with([toast()->info('Registro de produto excluído com sucesso!')]);
    }
}
