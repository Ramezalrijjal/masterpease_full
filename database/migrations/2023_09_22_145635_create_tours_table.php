<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('tours', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('service_id'); 
        $table->string('name');
        $table->string('description');
        $table->string('image');
        $table->string('price');
        $table->dateTime('Tour Date');
        $table->string('address');
        $table->timestamps();

        $table->foreign('service_id')->references('id')->on('services');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
};
