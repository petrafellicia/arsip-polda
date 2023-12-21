<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_agenda');
            $table->string('nomor_surat')->unique();
            $table->string('jenis_surat');
            $table->foreignId('id_pengirim')->constrained('pengirims')->onDelete('cascade')->onUpdate('cascade');
            $table->text('perihal');
            $table->string('kka');
            $table->date('tanggal_surat');
            $table->string('jam_terima');
            $table->string('disposisi_kepada');
            $table->foreignId('id_penerima')->constrained('penerimas')->onDelete('cascade')->onUpdate('cascade');
            $table->text('isi_disposisi');
            $table->string('keterangan');
            $table->string('file')->nullable(true);
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
        Schema::dropIfExists('surat_masuks');
    }
};
