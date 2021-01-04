<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            // ASIGNAR TIPO DE DATO CORRECTO        
            $table->id();
            $table->string('name', '100');
            $table->string('lastName', '100');
            $table->string('address');
            $table->string('city');
            $table->string('streetName');
            $table->text('postCode');
            $table->string('country');
            $table->date('purchaseDate');
            $table->string('creditCardType');
            $table->bigInteger('creditCardNumber');
            $table->date('creditCardExpirationDate');   
            $table->string('userName');
            $table->string('password');
            $table->string('email')->unique;
            $table->text('telephone');
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
        Schema::dropIfExists('data');
    }
}
