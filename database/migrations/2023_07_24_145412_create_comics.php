<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->smallIncrements("id");
            $table->string("title",100);
            $table->text("description");
            $table->text("thumb");
            $table->float("price",7,2);
            $table->string("series",50);
            $table->date("sale_date");
            $table->string("type",50);
            $table->string("artists");
            $table->string("writers");

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
        Schema::dropIfExists('comics');
    }
};
