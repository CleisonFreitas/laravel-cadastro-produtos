<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_tag;
use App\Http\Requests\ProductRequest;
//use App\Http\Resources\ProductResource;
use Exception;
//use Faker\Core\Number;
use App\Models\Tag;
//use Illuminate\Http\Request;
//use phpDocumentor\Reflection\PseudoTypes\NumericString;
use Alert;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Exibindo Listagem de Produtos
    public function index()
    {
        try{

            $product = Product::all();
            $tag_old = Tag::all();
            
        }catch(\Exception $e){
            return response()->json('Conteudo nao encontrado');
        }finally{
            return view('Product',  compact('product','tag_old'));
        }
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
            $product_id = $product->id;
            foreach ($request->tag_id as $tag) {
                DB::table('product_tag')->insert([
                    ['tag_id' => $tag, 'product_id' => $product->id],
                ]);
            }
        }catch(\Exception $e){
            return response()->json('Sequência já cadastrada');

        }finally{
            return redirect()->back()->with([toast()->success('Produto Cadastrado com sucesso!')]);
        }

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
            $tag_old = Tag::etiqueta($id);

            $etiqueta = Product_tag::novaetiqueta($id);


        }catch(\Exception $e){
            return response()->json('Produto não encontrado');
        }

            return view('edit_product', compact('product','etiqueta','tag_old'));
    }
    // Exibindo menu de Cadastro
    public function show(Product $product)
    {

        return view('create_product', ['tag_old' => Tag::all()]);
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

            $etiqueta = DB::table('product_tag')->where('product_id', $id)->delete();

            // Verificando a existência de tag
            if($request->tag_id !== null){
            foreach ($request->tag_id as $tag) {
                DB::table('product_tag')->insert([
                    ['tag_id' => $tag, 'product_id' => $id],
                ]);
            }
        }

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
