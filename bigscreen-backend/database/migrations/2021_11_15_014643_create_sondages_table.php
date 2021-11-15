<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSondagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sondages', function (Blueprint $table) {
            $table->id();
            $table->string('q1');
            $table->string('q2')->nullable();
            $table->integer('q3')->nullable();
            $table->integer('q4')->nullable();
            $table->string('q5')->nullable();
            $table->string('q6')->nullable();
            $table->string('q7')->nullable();
            $table->string('q8')->nullable();
            $table->integer('q9')->nullable();
            $table->string('q10')->nullable();
            $table->integer('q11')->nullable();
            $table->integer('q12')->nullable();
            $table->integer('q13')->nullable();
            $table->integer('q14')->nullable();
            $table->integer('q15')->nullable();
            $table->string('q16')->nullable();
            $table->string('q17')->nullable();
            $table->string('q18')->nullable();
            $table->string('q19')->nullable();
            $table->string('q20')->nullable();
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
        Schema::dropIfExists('sondages');
    }
}
