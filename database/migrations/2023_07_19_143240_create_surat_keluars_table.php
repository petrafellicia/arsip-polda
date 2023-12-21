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
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('no_agenda');
            $table->string('no_surat');
            $table->string('jenis_surat');
            $table->foreignId('id_pengirim')->constrained('pengirims')->onDelete('cascade')->onUpdate('cascade');
            $table->text('perihal');
            $table->string('kka');
            $table->string('dasar_surat');
            $table->date('tgl_surat');
            $table->string('jam_surat');
            $table->foreignId('id_penerima')->constrained('penerimas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('feedback');
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
        Schema::dropIfExists('surat_keluars');
    }
};