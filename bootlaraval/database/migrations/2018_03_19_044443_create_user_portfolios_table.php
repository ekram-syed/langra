<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); // foreign key

            $table->string('title');
            $table->text('description');
            $table->string('thumbnail');
            $table->string('link'); 

            $table->date('from');
            $table->date('to');

            $table->string('skills'); // ids of skills

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
        Schema::dropIfExists('user_portfolios');
    }
}
