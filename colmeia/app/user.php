<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = "abelha";
    protected $fillable = ['pkEmail','password','indentifyUser', 'callDisponibility','sosMensage'];
 	protected $guarded = ['id', 'created_at', 'update_at'];
 	
 }
