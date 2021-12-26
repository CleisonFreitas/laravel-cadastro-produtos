<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Resources\TagResource;
//use Illuminate\Http\Request;

use App\Http\Requests\TagRequest;
use Alert;
use Exception;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tag',['tag' => Tag::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        try{
            $tag = Tag::create($request->validated());

        }catch(\Exception $e){
            return redirect()->back()->with([toast()->success('Nova tag cadastrada com sucesso!')]);
        }

        return redirect()->back()->with([toast()->success('Nova tag cadastrada com sucesso!')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */

    public function edit($id){
        try{
            $tag = Tag::findOrfail($id);
        }catch(\Exception $e){
            return response()->json('Registro de tag nao encontrado!');
        }

        return view('edit_tag',['tag' => $tag]);
    }

    public function show(Tag $tag)
    {
        return view('create_tag');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        try{
            $tag = Tag::findOrfail($id);
            $tag->update($request->validated());
        }catch(\Exception $e){
            return response()->json('Registro nao encontrado!');
        }
        return redirect()->back()->with([toast()->info('Registro atualizado com sucesso!')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $tag = Tag::findOrfail($id);
        }catch(\Exception $e){
            throw new Exception();
         //  return redirect()->back()->with([response()->json('ID nao encontrado')]);
        }finally{
            $tag->delete();
            return redirect()->back()->with([toast()->info('Registro Excluído com sucesso')]);
        }
    }
}
