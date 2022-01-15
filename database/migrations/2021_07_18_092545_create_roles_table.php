<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name', 8)->comment('役職名'); 
            $table->timestamps();
        });
        DB::table('roles')->insert(['id'=>1,'role_name' => 'マネージャー']); 
        DB::table('roles')->insert(['id'=>2,'role_name' => '一般社員']); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
