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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->string('edisi', 50)->notNullable();
            $table->string('nomor_rak', 20)->notNullable();
            $table->integer('tahun_terbit')->notNullable();
            $table->string('penerbit', 100)->notNullable();
            $table->integer('kode_penulis')->unsigned()->notNullable();
            $table->foreign('kode_penulis')->references('id')->on('penulis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
