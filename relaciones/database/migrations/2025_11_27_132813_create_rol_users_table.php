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
        Schema::create('rols_users', function (Blueprint $table) {
            $table->id();
            //Foreign Key
            $table->foreignId("user_id")
                  ->constrained();
            $table->foreignId("rol_id")
                  ->constrained();
            
            // Para no repetir un rol a un usuario
            $table->unique(["user_id","rol_id"]);

            //Opcional
            $table->string("agregado_por")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rols_users');
    }
};
