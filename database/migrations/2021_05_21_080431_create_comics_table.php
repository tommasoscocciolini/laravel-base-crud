<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('comics');
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('description', 1000);
            $table->string('thumb', 1000);
            $table->float('price')->unsigned();
            $table->string('series', 50)->nullable();
            $table->date('sale_date');
            $table->string('type', 50)->nullable();
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
}
