<?php

namespace App\Http\Controllers;

use App\Models\Product_tag;
use App\Models\Product;
use App\Http\Resources\ProductTagResource;
use App\Http\Requests\ProductTagRequest;
use Dompdf\Adapter\PDFLib;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

            $product_tag= Product_tag::relevancia();

        }catch(\Exception $e){

            return response()->json('erro ao tentar gerar listagem.');

        }finally{

            return view('consult_product',compact('product_tag'));
        }

     //   return ProductTagResource::collection(Product_tag::all());
    }



    public function viewpdf(){
        try{

            $etiqueta = Product_tag::all();

            foreach($etiqueta as $etiqueta){
           //     $etiqueta = array($etiqueta);
                $product_tag = Product_tag::relevancia();
        //    }
                }
            }catch(\Exception $e){
               return response()->json('Nenhuma informação encontrada!');
           }finally{
              return \PDF::loadView('pdf.relatorio',compact('product_tag'))
                    ->setPaper('a4', 'landscape')
                   ->download('relacao-produtos.pdf');

           }
    }
}
