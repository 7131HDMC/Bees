<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    //
    protected $table = "localizacao_abelha";
    protected $fillable = ['latitude','longitude'];
 	protected $guarded = ['id', 'created_at', 'update_at'];
}
