<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cds', function (Blueprint $table) {
            $table->id();
            $table->string('isbn',15);
            $table->string('title');
            $table->string('author');
            $table->float('price', 8, 2);
            $table->string('genre');
            $table->string('description');
            $table->string('vote');
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
        Schema::dropIfExists('cds');
    }
}
