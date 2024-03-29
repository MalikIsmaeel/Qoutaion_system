<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('lines')) {

        Schema::create('lines', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->text("terms")->nullable();
            $table->text("not_include")->nullable();
            $table->unsignedBigInteger('main_line')->nullable();
            $table->foreign('main_line')->references('id')->on('lines')->onDelete('cascade');
            $table->timestamps();
        });
    }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('lines');
    }
};
