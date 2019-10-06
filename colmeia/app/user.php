<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = "abelha";
    protected $fillable = ['pkEmail','password','indentifyUser','name','describleUser','callDisponibility','sosMensage'];
    protected $guarded = ['id', 'estado'];
}
