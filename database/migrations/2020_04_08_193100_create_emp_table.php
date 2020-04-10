<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('emp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('gender');
            $table->string('address');
            $table->string('designation');
            $table->string('dateofjoin');
            $table->string('city');
            $table->string('state');
            $table->string('leaves');
            $table->string('technicalkow');
            $table->string('Hobbies');
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
        Schema::dropIfExists('emp');
    }
}

