<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('tools')->nullable();
            $table->boolean('is_active')->default(0);
            $table->integer('percent')->nullable();
            $table->integer('file_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('skills' , function (Blueprint $table) {
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
        Schema::table('skills' , function (Blueprint $table) {
            $table->dropForeign('skills_file_id_foreign');
        });
        Schema::dropIfExists('skills');
    }
}
