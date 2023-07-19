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
            $table->string('Nomor Agenda');
            $table->string('Nomor Surat');
            $table->string('Jenis Surat');
            $table->string('Asal Surat');
            $table->text('Perihal');
            $table->string('KKA');
            $table->timestamp('Tanggal Surat');
            $table->string('Jam Terima');
            $table->string('Disposisi Kepada');
            $table->string('Distribusi');
            $table->text('Isi Disposisi');
            $table->string('Keterangan');
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
