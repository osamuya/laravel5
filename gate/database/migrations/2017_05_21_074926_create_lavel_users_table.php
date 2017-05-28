<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLavelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lavel_users', function (Blueprint $table) {
            $table->increments('id');
			$table->string('uniqeid', 64);
			$table->string('email')->unique();
			$table->string('password', 256);
			$table->integer('count');
			$table->softDeletes('delFlag');
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
        Schema::dropIfExists('lavel_users');
    }
}
