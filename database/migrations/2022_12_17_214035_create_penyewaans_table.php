<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('mobil_id');
            $table->string('jenis_pembayaran');
            $table->string('harga');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            
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
        Schema::dropIfExists('penyewaans');
    }
}
