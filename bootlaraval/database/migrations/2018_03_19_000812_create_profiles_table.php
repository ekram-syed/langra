<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); // foreign key
            
            $table->string('title', 100 );
            $table->text('description');

            $table->string('avatar', 100 ); // profile picture           
            $table->string('video', 100 );  // profile video link            
            
            // hourly rate   

            $table->string('country',100);
            $table->string('city',100);
            $table->string('phone',20);
            $table->text('address');

            $table->string('skills'); // ids of skills

            $table->smallInteger('completed'); // profile completeness
            $table->dateTime('joined');
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
        Schema::dropIfExists('profiles');
    }
}
