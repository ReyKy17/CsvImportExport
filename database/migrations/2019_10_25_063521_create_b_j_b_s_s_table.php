<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBJBSSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_j_b_s_s', function (Blueprint $table) {
            $table->integer('nomor_urut');
            $table->date('tanggal');
            $table->date('kode');
            $table->string('keterangan');
            $table->string('no_bukti');
            $table->bigInteger('mutasi_debit');
            $table->bigInteger('mutasi_kredit');
            $table->bigInteger('saldo');
            $table->string('kode_rekening');
            $table->timestamps();
            $table->bigIncrements('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('b_j_b_s_s');
    }
}
