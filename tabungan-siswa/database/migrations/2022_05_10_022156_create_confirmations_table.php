<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmations', function (Blueprint $table) {
            $table->id('confirmation_id');
            $table->integer('saldo');
            $table->enum('status', ['pending','complete', 'rejected']);
            $table->string('jenis_transaksi');
            $table->bigInteger('admin')->unsigned();
            $table->char('siswa');
            $table->foreign('admin')->references('admin_id')->on('admins')->onDeleteRestrict()->onUpdateCascade();
            $table->foreign('siswa')->references('NIS')->on('users')->onDeleteRestrict()->onUpdateCascade();
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
        Schema::dropIfExists('confirmations');
    }
}
