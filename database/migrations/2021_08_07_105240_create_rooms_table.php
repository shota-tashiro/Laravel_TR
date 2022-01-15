<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->String('room_name')->comment('会議室名');
            $table->timestamps();
        });
        DB::table('rooms')->insert(['id'=>1,'room_name' => '会議室A']); 
        DB::table('rooms')->insert(['id'=>2,'room_name' => '会議室B']); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
