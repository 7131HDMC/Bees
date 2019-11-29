<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Localizacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('localizacao_abelha', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('latitude');
            $table->string('longitude');    
            $table->unsignedBigInteger('panico')->nullable();
            $table->foreign("panico")->references("id")->on("panicoUser")->onUpdate("cascade");        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
