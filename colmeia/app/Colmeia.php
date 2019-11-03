<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colmeia extends Model
{
    protected $table = "colonia";
    protected $fillable = ['description' ,'colonia_name'];
 	protected $guarded = ['id','abelha_id','colmeia_id', 'created_at', 'update_at'];
}
