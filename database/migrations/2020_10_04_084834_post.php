<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('idpost');
            $table->string('judul');
            $table->unsignedBigInteger('idkategori');
            $table->text('isipost');
            $table->string('file_gambar');
            $table->datetime('tgl_insert');
            $table->datetime('tgl_update');
            $table->unsignedBigInteger('idpenulis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
