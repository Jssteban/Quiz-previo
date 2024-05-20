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

          //Camionero
          Schema::create('truck_driver', function (Blueprint $table) {
            $table->id();
            //nombre
            $table->string('name');
            //poblacion
            $table->string('population');
            //direccion
            $table->string('address');
            //dni
            $table->bigInteger('dni');
            //telefono
            $table->bigInteger('phoneNumbre');
            //salario
            $table->bigInteger('salary');
            $table->timestamps();
        });

        Schema::create('truck', function (Blueprint $table) {
            $table->id();
            //potencia
            $table->bigInteger('power');
            //matricula
            $table->string('tuition');
            //modelo
            $table->integer('model');
            //lave primaria
            $table->unsignedBigInteger('truck_driver_id')->nullable();
            $table->timestamps();

            $table->foreign('truck_driver_id')->references('id')->on('truck_driver')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('package', function (Blueprint $table) {
            $table->id();
            //codigo
            $table->bigInteger('code');
            //descripcion
            $table->string('description');
            //destinatario
            $table->string('addressee');
             //direccion
             $table->string('address');
              //lave primaria
              $table->unsignedBigInteger('truck_driver_id')->nullable();
              $table->timestamps();

              $table->foreign('truck_driver_id')->references('id')->on('truck_driver')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck');
        Schema::dropIfExists('truck_driver');
        Schema::dropIfExists('package');
       
    }
};
