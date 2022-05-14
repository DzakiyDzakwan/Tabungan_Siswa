<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->integer('saldo');
            $table->enum('keterangan', ['in','out']);
            $table->date('transaction_date');
            $table->bigInteger('admin')->unsigned();
            $table->char('siswa');
            $table->foreign('admin')->references('admin_id')->on('admins')->onDeleteRestrict()->onUpdateCascade();
            $table->foreign('siswa')->references('NIS')->on('siswas')->onDeleteRestrict()->onUpdateCascade();
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
        Schema::dropIfExists('transactions');
    }
}
