<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsiAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_album', function (Blueprint $table) {
            $table->unsignedBigInteger('album_id');
            $table->foreign('album_id')->references('id')->on('arsip_album');

            $table->unsignedBigInteger('file_id');
            $table->foreign('file_id')->references('id')->on('arsip_file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('isi_album');
    }
}
