<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->string('userName');
            $table->string('userEmail');
            $table->string('tripName');
            $table->integer('tripPrice');
            $table->string('tripDate');
            $table->integer('numAdults');
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('bookings', function (Blueprint $table) {
//             $table->id();
//             $table->string('userName');
//             $table->string('userEmail');
//             $table->string('tripName');
//             $table->integer('tripPrice');
//             $table->string('tripDate');
//             $table->integer('numAdults');
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('bookings');
//     }
// };
