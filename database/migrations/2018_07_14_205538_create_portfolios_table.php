<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();

            $table->integer('file_id')->unsigned()->nullable();
        });

        Schema::table('portfolios' , function (Blueprint $table) {
            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolios' , function (Blueprint $table) {
            $table->dropForeign('portfolios_file_id_foreign');
        });
        Schema::dropIfExists('portfolios');
    }
}
