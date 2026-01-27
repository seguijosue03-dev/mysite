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
        Schema::create('users', function (Blueprint $table) {
        $table->id(); // ID
        $table->string('name'); // Name (optional, but good for "Welcome Prince")
        $table->string('email')->unique(); // Email
        $table->string('password'); // Password
        $table->string('role')->default('user'); // Role (Set to 'user' by default)
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
        Schema::dropIfExists('users');
    }
};
