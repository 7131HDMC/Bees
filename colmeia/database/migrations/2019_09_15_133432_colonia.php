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
                $table->unsignedBigInteger("colmeia_id");
                $table->foreign("colmeia_id")->references("id")->on("colmeia");
                $table->unsignedBigInteger("abelha_id");
                $table->foreign("abelha_id")->references("id")->on("abelha");
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
