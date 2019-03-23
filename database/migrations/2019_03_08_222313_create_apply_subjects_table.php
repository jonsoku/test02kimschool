<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplySubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_subjects', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->index();

            $table->increments('id');
            $table->string('java1')->nullable();
            $table->string('java2')->nullable();
            $table->string('java3')->nullable();
            $table->string('web1')->nullable();
            $table->string('web2')->nullable();
            $table->string('web3')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('apply_subjects');
    }
}
