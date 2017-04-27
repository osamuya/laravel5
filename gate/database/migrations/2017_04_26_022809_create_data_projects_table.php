<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name', 100);
            $table->string('uniq_hash', 32);
            $table->text('remark');
            $table->text('tag');
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
        Schema::dropIfExists('data_projects');
    }
}
