<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;     //define the structure of database tables.
use Illuminate\Support\Facades\Schema;      //provides a convenient interface for working with database schemas.

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tasks', function (Blueprint $table) {       //create column in database
        $table->id();
        $table->string('name');
        $table->string('time');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
