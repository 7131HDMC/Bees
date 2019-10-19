<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        
        $abelha = new user;
//$dados = $abelha->where('indentifyUser', $request->input("user_name") )->first();
       //cadastrar usuario

      //  if(count($dados)==0)
       // {
            $abelha->indentifyUser = $request->input("user_name");
            $abelha->password = $request->input("user_pass");
            $abelha->pkEmail = $request->input("user_email");
            $abelha->callDisponibility = 's';
            $abelha->sosMensage = 'Me ajude';
            $abelha->save();
      //  }else{
      /*      if(Hash::check($request->input("user_pass"),$dados->password))
            {
                $resultado = "Logado com sucesso!";
            }else{
                $resultado = "Senha ou Nome errado";
            }
        }*/
        
         

    

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
