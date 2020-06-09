<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nickname');
            $table->string('name');
            $table->timestamps();
        });
        
        DB::table('role')->insert(['nickname'=>'admin','name'=>'Admin']);
        DB::table('role')->insert(['nickname'=>'user','name'=>'User']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
}
