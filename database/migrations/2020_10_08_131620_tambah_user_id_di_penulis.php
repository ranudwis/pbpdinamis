<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahUserIdDiPenulis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penulis', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->dropColumn('nama');
            $table->dropColumn('email');
            $table->dropColumn('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penulis', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->string('password');
            $table->string('email');
            $table->string('nama');
        });
    }
}
