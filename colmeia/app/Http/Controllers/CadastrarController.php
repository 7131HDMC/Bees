<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
error_reporting(E_ALL);
ini_set('display_errors', 'On');
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
       /*
        $abelha = new user;
    
         $abelha->indentifyUser = $request->json("user_name");
     
        $abelha->password = $request->json("user_pass");
        $abelha->pkEmail = $request->json("user_email");
        $abelha->callDisponibility = 's';
        $abelha->sosMensage = 'Me ajude';*/
        $data = $request->json()->all();
         dd('Estou aqui em: CategoryController no método store() and the data from sigin are :: ' . $data /*. $abelha->save()->toSql()*/);
       
       // return response()->json($abelha);
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
