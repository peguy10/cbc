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
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('adresse');
            $table->string('pays')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->longText('but');
             //bank info

             $table->string('ref_bank');
             $table->string('agrement');
             $table->string('num_com');
             $table->string('reg_com');
             $table->string('code_naf');
             $table->integer('siret');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associations');
    }
};
