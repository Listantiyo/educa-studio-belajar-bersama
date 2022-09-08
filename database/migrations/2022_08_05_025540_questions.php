<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Questions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user_dil');
            $table->integer('id_type');
            $table->integer('id_kategori');
            $table->integer('id_tags');
            $table->string('title');
            $table->string('question');
            $table->integer('like');
            $table->integer('dislike');
            $table->integer('votes');
            $table->string('path_qst_img')->nullable();
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
        Schema::dropIfExists('tbl_questions');
    }
}
