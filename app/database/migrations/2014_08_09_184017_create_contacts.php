<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function($table){
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->string('first_name');
          $table->string('last_name')->nullable();
          $table->string('company')->nullable();
          $table->string('cellphone')->nullable();
          $table->string('home_tell')->nullable();
          $table->string('work_tell')->nullable();
          $table->string('email')->nullable();
          $table->string('website')->nullable();
          $table->string('address_home', 512)->nullable();
          $table->string('address_work', 512)->nullable();
          $table->timestamps();


          $table->index('user_id');
          $table->index('first_name');
          $table->index('last_name');

          $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contacts');
	}

}
