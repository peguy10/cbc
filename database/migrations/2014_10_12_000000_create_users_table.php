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
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('matricule')->unique();
            $table->string('civilite');
            $table->string('adresse');
            $table->date('hbd');
            $table->string('bank');
            $table->string('pays');
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('typeAdherent_id')->nullable();
            $table->foreign('typeAdherent_id')->references('id')->on('type_adherents')->onDelete('CASCADE');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
