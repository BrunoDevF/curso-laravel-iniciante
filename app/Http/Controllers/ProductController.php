<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        
    }
    public function index()
    {
        $teste = 123;
        return view('admin.pages.products.index', compact('teste'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreUpdateProduct  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProduct $request)
    {   
        dd('OK!!!');


        // Essa é a maneira mais facil de validar campos
        // Porem nao é recomendada
        // $request->validate([
        //     'name'=> 'required|min:3|max:255',
        //     'description'=> 'nullable|min:15|max:10000',
        //     'photo' => 'required|image'
        // ]);
        // dd('OK! Cadastrado com sucesso');
        //dd($request->all());
        // $name = $request->input('name');
        // $description = $request->input('description');
        // return [$name, $description];

        // if($request->file('photo')->isValid()){
        //     // dd($request->file('photo')->store('products'));

        //     //arquivo com nome personalizado
        //     $fileName = $request->name.'.'.$request->photo->extension();
        //     dd($request->file('photo')->storeAs('products',$fileName));
        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
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
        dd("Produto {$id} editado com sucesso!");
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
