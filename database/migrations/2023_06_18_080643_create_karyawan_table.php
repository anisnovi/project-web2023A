<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->nullable();
            $table->enum('jenkel',['Laki-Laki','Perempuan']);
            $table->string('usia');
            $table->enum('status',['Belum Menikah','Nikah']);
            $table->string('agama');
            $table->enum('jabatan',['HRD','Marketing','IT','Manager']);
            $table->string('gaji');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
