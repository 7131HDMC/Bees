<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localizacao;
use App\feromonio;
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
    public function store(Request $request)
    {
        //
       $locale = new Localizacao();
       $locale->latitude = $request->input('latitude');
       $locale->longitude = $request->input('longitude');
     //  $panico = new feromonio();
     //  $panico->panico = true;
      // $panicoa->tivateAt = '2019-10-20 19:44:05';
       $locale->save();
     //  $panico->save();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function long(Request $request)
    {
        $locais = DB::table('localizacao_abelha')->get()->first();
        return response()->json([
            'long' => $locais->longitude
        ]);
    }
    public function lat(Request $request)
    {
        $locais = DB::table('localizacao_abelha')->get()->first();
        return response()->json([
            'lat' => $locais->latitude
        ]);
    }
    public function reset()
    {
        return response(0, 200)
                 ->header('Content-Type', 'text/plain');
    }
    public function verifica()
    {
       //$panico =  DB::table('panicoUser')->where('panico',true)->first();
         //if($panico){
            return response(1, 200)
                      ->header('Content-Type', 'text/plain');
        // }else{            
            
      //  }
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
