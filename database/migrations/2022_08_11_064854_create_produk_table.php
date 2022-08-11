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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id');
            $table->foreignId('detailTransaksi_id');
            $table->foreignId('detailOrder_id');
            $table->foreignId('tipe');
            $table->varchar('nama',100);
            $table->foreignId('harga');
            $table->foreignId('info');
            $table->date('tgl_dibuat');
            $table->date('tgl_dimodif');
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
        Schema::dropIfExists('produk');
    }
};
