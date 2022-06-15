<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormrentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formrentals', function (Blueprint $table) {
            $table->id();
            $table->string('typerental', 100);
            $table->string('name', 100);
            $table->integer('identitynumber');
            $table->string('gender',10);
            $table->string('phone', 15);
            $table->string('email', 50);
            $table->string('location',100);
            $table->date('startrental');
            $table->date('endrental');
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
        Schema::dropIfExists('formrentals');
    }
}
