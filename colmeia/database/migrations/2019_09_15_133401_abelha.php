<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Abelha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('abelha', function(Blueprint $table)
            {
                $table->bigIncrements('id');
                $table->string("pkEmail",70)->unique();
                $table->string("password",12);
                $table->string("indentifyUser",30);
                $table->string("name",60);
                $table->string("describleUser",150);
                $table->boolean("callDisponibility");
                $table->string("sosMensage",70);
                 $table->unsignedBigInteger("estado");
                 $table->foreign("estado")->references("id")->on("panicoUser")->onUpdate("cascade");
                $table->timestamps();
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