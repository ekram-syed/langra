<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_experiences', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id'); // foreign key

                $table->string('company');
                $table->string('country');
                $table->string('city');

                $table->string('title'); // subject
                $table->string('role');
                $table->string('description');

                $table->date('from');
                $table->date('to');

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
        Schema::dropIfExists('user_experiences');
    }
}
