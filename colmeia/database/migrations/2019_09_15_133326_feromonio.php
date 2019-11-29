<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Feromonio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('panicoUser', function(Blueprint $table)
            {
                $table->bigIncrements("id");
                $table->boolean("panico");
                $table->unsignedBigInteger("user")->nullable();
                 $table->foreign("user")->references("id")->on("abelha")->onUpdate("cascade");
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
