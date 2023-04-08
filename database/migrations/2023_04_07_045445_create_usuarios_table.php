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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_rol');
            $table->string('Nombre');
            $table->string('Apellido_p');
            $table->string('Apellido_m');
            $table->string('Correo_elec')->unique();
            $table->string('Password');
            $table->bigInteger('Numero_telefonico');
            $table->string('Direccion');
            $table->string('Foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
