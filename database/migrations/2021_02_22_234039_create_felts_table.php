<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeltsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('felts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bruker_id')->constrained()->onDelete('cascade');
            $table->foreignId('kategori_id');
            $table->string('title');
            $table->integer('antall_rom');
            $table->integer('antall_lager');
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
        Schema::dropIfExists('felts');
    }
}
