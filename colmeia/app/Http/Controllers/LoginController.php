<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localizacao;
use App\feromonio;
use App\user;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
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

    public function panico(Request $request)
    {
       $id_user = DB::table('abelha')->select('id')->where('indentifyUser',$request->input('user_name') )->get()->first();
       $datetime = date("Y-m-d h:i:s");

       $panico = new feromonio();
       $localizacao = new Localizacao();

       $panico->user = $id_user->id;
       $panico->panico = true;
       $panico->ativateAt = $datetime;
       $localizacao->latitude = $request->input('latitude');
       $localizacao->longitude = $request->input('longitude');
       $localizacao->panico = $panico->user;
       $localizacao->save();
     dd( 'OLA PANICO SQL::: ' . $panico->save()->toSql());
    }

    public function login(Request $request)
    {
        $email = DB::table('abelha')->where('pkEmail','=', $request->input('user_name'))->orWhere('indentifyUser','=', $request->input('user_name'))->get()->first();
        $pass = DB::table('abelha')->where('password','=', $request->input('user_pass'))->get()->first();
        if($email != null)
        {
            if($pass != null){
                return response(1, 200)
                 ->header('Content-Type', 'text/plain');
            }else{return response(0, 200)
                 ->header('Content-Type', 'text/plain');}

        }else {return response(0, 200)
                 ->header('Content-Type', 'text/plain');}
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // ajuste para o trabalho da view - app
    public function long(Request $request)
    {
        $panico =  DB::table('abelha')->select("indentifyUser")->join('panicoUser', function($join)
        {
            $join->on('abelha.id', '=', 'panicoUser.user');

        })->where('panico',1)->get()->first();

       if($panico)
       {
             $localizacaoBee =  DB::table('panicoUser')->select("longitude")->join('localizacao_abelha', function($join)
            {
                $join->on('panicoUser.user', '=', 'localizacao_abelha.panico');
            })->where('panicoUser.panico',1)->get()->first();

       }
        
        return response($localizacaoBee->longitude, 200)
                 ->header('Content-Type', 'text/plain');
    }
    // ajuste para o trabalho da view - app
    public function lat(Request $request)
    {
         $panico =  DB::table('abelha')->select("indentifyUser")->join('panicoUser', function($join)
        {
            $join->on('abelha.id', '=', 'panicoUser.user');

        })->where('panico',1)->get()->first();

       if($panico)
       {
             $localizacaoBee =  DB::table('panicoUser')->select("latitude")->join('localizacao_abelha', function($join)
            {
                $join->on('panicoUser.user', '=', 'localizacao_abelha.panico');
            })->where('panicoUser.panico',1)->get()->first();

       }
        
        return response($localizacaoBee->latitude, 200)
                 ->header('Content-Type', 'text/plain');
    }
    public function name(Request $request)
    {
         $panico =  DB::table('abelha')->select("indentifyUser")->join('panicoUser', function($join)
        {
            $join->on('abelha.id', '=', 'panicoUser.user');

        })->where('panico',1)->get()->first();
        
        return response($panico->indentifyUser, 200)
                 ->header('Content-Type', 'text/plain');
    }
    public function cadastrar(Request $request)
    {
        $credentials = DB::table('abelha')->where('pkEmail','=', $request->input('user_email'))->orWhere('indentifyUser','=', $request->input('user_name'))->get()->first();
        if($credentials == null)
        {
            $abelha = new user();    
            $abelha->indentifyUser = $request->input("user_name");
            $abelha->password = $request->input("user_pass");
            $abelha->pkEmail = $request->input("user_email");
            $abelha->callDisponibility = 's';
            $abelha->sosMensage = 'Me ajude';
            $abelha->save();
            $abelha->save();
            
            return response(1, 200)
                 ->header('Content-Type', 'text/plain');
        }else {
            return response(0, 200)
                 ->header('Content-Type', 'text/plain');
             }
         }
    public function reset(Request $request)
    {
        

    
      $panico =  DB::table('abelha')->join('panicoUser',function($join)
        {
            $join->on('abelha.id', '=', 'panicoUser.user');
        })->where('indentifyUser',$request->input('user_name'))->update(['panico' => 0]);


       // $panico =  DB::table('abelha')->join('user')select('panico')->where('panico',1)->first();
        return response( $panico, 200)
                 ->header('Content-Type', 'text/plain');
    }
    public function verifica(Request $request)
    {//,
       $panico =  DB::table('abelha')->select("panico")->join('panicoUser', function($join)
        {
            $join->on('abelha.id', '=', 'panicoUser.user');

        })->where('panico',1)->get()->first();
 
       if($panico)
       {
        return response($panico->panico, 200)
                 ->header('Content-Type', 'text/plain');
             /*$localizacaoBee =  DB::table('panicoUser')->select("longitude","latitude")->join('localizacao_abelha', function($join)
            {
                $join->on('panicoUser.user', '=', 'localizacao_abelha.panico');
            })->where('panicoUser.panico',1)->get()->first();
             if($localizacaoBee)
             {*/
                
           /*  }else{
                 return response(0, 200)
                 ->header('Content-Type', 'text/plain');
             }*/
     //  }else{
       //  return response(0, 200)
         //        ->header('Content-Type', 'text/plain');
       }

      

       //dd($localizacaoBee);
        /*if($panico){
            return response($panico->indentifyUser . '=' . $panico->sosMensage . '=' . $localizacaoBee->longitude .  '=' . $localizacaoBee->latitude)
                      ->header('Content-Type', 'text/plain');
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
