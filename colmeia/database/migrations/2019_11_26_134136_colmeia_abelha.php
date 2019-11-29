<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColmeiaAbelha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create("colmeia_abelha",function(Blueprint $table)
            {
                
                $table->bigIncrements('id');
                $table->unsignedBigInteger("colonia")->nullable();
                $table->foreign("colonia")->references("id")->on("colonia")->onUpdate("cascade");
                $table->unsignedBigInteger("abelha")->nullable();
                $table->foreign("abelha")->references("id")->on("abelha")->onUpdate("cascade");$table->timestamps();   
                
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
