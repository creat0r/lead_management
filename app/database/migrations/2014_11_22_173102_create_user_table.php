<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{		
                    $table->increments('id');
                    
                    $table->string('email')->unique(); // email address should be unique
                    
                    $table->string('full_name');
                    
                    $table->string('password', 50); // password field length should not exceed 50 characters
                    
                    $table->string('token', 100); // token generated field , length should not exceed 100 characters
                    
                    $table->dateTime('token_expiry_date'); // token expiry date, which should be not more than 1 day
                                        
                    $table->string('user_type'); // Possible Values ['Customer', 'System_Admin',  'Operator', 'Agent']
                    
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
            Schema::drop('users');
	}

}
