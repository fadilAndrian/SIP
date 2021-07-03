<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip_album', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');             // dibuat biar bisa ngecek siapa yg buat album semisal ada-
            $table->foreign('user_id')->references('id')->on('users');      // kesalahan. Setiap update nanti riwayat pembuatnya berubah
                                                                            // atau tdk? semisal : 
            $table->string('album_name');                                   // penanggung jawab : Fadil    || penanggung jawab : Febrian
            $table->timestamps();                                           // atau
        });                                                                 // created by : Fadil    || updated by : Febrian 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arsip_album');
    }
}
