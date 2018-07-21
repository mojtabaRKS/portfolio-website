<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_portfolio', function (Blueprint $table) {
            $table->integer('attribute_id')->unsigned();
            $table->integer('portfolio_id')->unsigned();
        });

        Schema::table('attribute_portfolio' , function (Blueprint $table) {
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attribute_portfolio' , function (Blueprint $table) {
            $table->dropForeign('attribute_portfolio_attribute_id_foreign');
            $table->dropForeign('attribute_portfolio_portfolio_id_foreign');
        });
        Schema::dropIfExists('attribute_portfolio');
    }
}
