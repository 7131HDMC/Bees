<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Colonia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create("colonia",function(Blueprint $table)
            {
                $table->bigIncrements("id");
                $table->string('description', 100);
                $table->string('colonia_name',30);
                $table->unsignedBigInteger("abelha")->nullable();
                $table->foreign("abelha")->references("id")->on("abelha")->onUpdate("cascade");    
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
