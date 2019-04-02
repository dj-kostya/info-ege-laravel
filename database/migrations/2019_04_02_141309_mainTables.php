<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class MainTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('Tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_task');
            $table->text('text');
            $table->boolean('with_image')->default(false);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        Schema::create('Images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uri');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        Schema::create('TaskImage', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_task')->index()->unsigned();
            $table->integer('id_image')->index()->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('id_task')
                    ->references('id')
                    ->on('Tasks')
                    ->onDelete('cascade');
            $table->foreign('id_image')
                ->references('id')
                ->on('Images')
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
        Schema::drop('TaskImage');
        Schema::drop('Tasks');
        Schema::drop('Images');

    }
}
