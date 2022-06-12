<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLembagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembagas', function (Blueprint $table) {
            $table->id();
            $table->string('npsn')->unique();
            $table->string('nsm');
            $table->string('nm_lembaga')->unique();
            $table->string('alamat')->nullable();
            $table->string('status')->nullable();
            $table->string('thn_pljrn')->nullable();
            $table->string('nm_kepala')->nullable();
            $table->string('nip_kepala')->nullable();
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
        Schema::dropIfExists('lembagas');
    }
}
