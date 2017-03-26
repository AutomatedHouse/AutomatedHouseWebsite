<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	
	private $id = 'id';
	private $firstName = 'f_name';
	private $lastName = 'l_name';
	private $email = 'email';
	private $password = 'password';
	private $allowNotification = 'allow_notification';
	
	
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            
        	$table->increments($this->id);
            $table->string($this->firstName);
            $table->string($this->lastName);
            $table->string($this->email)->unique();
            $table->string($this->password);
            $table->boolean($this->allowNotification);
            
            $table->rememberToken();
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
        Schema::drop('user');
    }
}
