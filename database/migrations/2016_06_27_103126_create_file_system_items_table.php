<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileSystemItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_system_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('extensio');
            $table->string('owner')->nullable();
            $table->string('url');
            $table->double('size');
            $table->string('mimetype')->default('unknown');
            $table->boolean('visible')->default(true);
            $table->integer('repository_id')->unsigned()->nullable();
            $table->foreign('repository_id')->references('id')->on('repositories');
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
        Schema::drop('file_system_items');
    }
}
