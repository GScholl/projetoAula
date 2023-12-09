<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendas',function(Blueprint $table){

            $table->id();
            $table->double('valor',8,2);
            $table->unsignedBigInteger('id_usuario');
            $table->timestamps();
            $table->foreign('id_usuario')->references('id')->on('usuarios');

        });
       
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
