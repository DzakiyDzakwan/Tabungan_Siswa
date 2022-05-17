<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id('berita_id');
            $table->string('judul');
            $table->string('image');
            $table->text('isi');
            $table->bigInteger('author')->unsigned();
            $table->foreign('author')->references('admin_id')->on('admins')->onDeleteCascade()->onUpdateCascade();
            $table->char('category', 4);
            $table->foreign('category')->references('category_id')->on('categories')->onDeleteCascade()->onUpdateCascade();
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
        Schema::dropIfExists('beritas');
    }
}
