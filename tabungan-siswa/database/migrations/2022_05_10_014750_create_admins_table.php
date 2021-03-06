<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id')->nullable(true);
            $table->string('nama');
            $table->string('pekerjaan')->nullable(true);
            $table->enum('status', ['active', 'inactive']);
            $table->bigInteger('user')->unsigned();
            $table->foreign('user')->references('id')->on('users')->cascadeOnUpdate()->deleteOnUpdate();
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
        Schema::dropIfExists('admins');
    }
}
