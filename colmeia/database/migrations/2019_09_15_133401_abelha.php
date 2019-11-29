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
                $table->string("indentifyUser",30)->unique();
                $table->string("callDisponibility");
                $table->string("sosMensage",70);
                      
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
