<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('asins');
            $table->string('jurusan');
            $table->integer('no_tlp');
            $table->string('jenis');
            $table->boolean('kelind');
            $table->date('periode');
            $table->dateTime('startdate');
            $table->datetime('enddate');
            $table->boolean('pil');
            $table->string('rencana');
            $table->image('file');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table');
    }
}
