<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;

class CadastrarController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('Estou aqui em: CategoryController no método store()');
        $abelha = new user;
       // $abelha->name = $request->name;
    
         $abelha->indentifyUser = 'haridade';;//$request->json("user_name");
     
        $abelha->password = '71318464';//$request->json("user_pass");
        $abelha->pkEmail = 'haricefetmg@gmail.com';;//$request->json("user_email");
     //   $abelha->describleUser = $request->bio;
      //  $abelha->callDisponibility = $request->callDisponibility;
      //  $abelha->sosMensage = $request->sosMensage;
        $abelha->save();
       // $abelha = user::create();
     
        return response()->json($abelha);
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
