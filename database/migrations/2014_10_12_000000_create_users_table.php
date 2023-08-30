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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //Integer Unsigned Increment
            $table->string('name');// varchar 
            $table->string('email')->unique();//evita datos dublicados
            $table->timestamp('email_verified_at')->nullable(); //propiedad nullable para campos que pueden quedar vacíos
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();//hora y fecha de modificacion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
