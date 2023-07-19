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
        Schema::create('mails', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_agenda');
            $table->string('nomor_surat')->unique();
            $table->string('jenis_surat');
            $table->string('asal_surat');
            $table->text('perihal');
            $table->string('kka');
            $table->timestamp('tanggal_surat');
            $table->string('jam_terima');
            $table->string('disposisi_kepada');
            $table->string('distribusi');
            $table->text('isi_disposisi');
            $table->string('keterangan');
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
        Schema::dropIfExists('mails');
    }
};
