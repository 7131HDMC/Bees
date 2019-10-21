<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feromonio extends Model
{
    //
    protected $table = "panicoUser";
    protected $fillable = ['panico','ativateAt','desativateAt'];
 	protected $guarded = ['id', 'created_at', 'update_at'];
}
