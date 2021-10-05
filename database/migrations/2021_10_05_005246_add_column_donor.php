<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDonor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendonor', function (Blueprint $table) {
            $table->string('nama');
            $table->string('email');
            $table->string('phone');
            $table->enum('gender', ['L', 'P']);
            $table->enum('status_cov', [0, 1])->default(0);
            $table->date('tgl_lahir');
            $table->date('positif')->nullable();
            $table->date('negatif')->nullable();
            $table->text('alamat');
            $table->enum('status_donor', ['belum', 'sudah'])->default('belum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
