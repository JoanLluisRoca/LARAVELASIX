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
        Schema::create('cotxes', function (Blueprint $table) {
            $table->id();
            $table->string('brand'); // Marca del cotxe
            $table->string('model'); // Model del cotxe
            $table->integer('any_fabricacio'); // Any de fabricació
            $table->integer('price')->default(0); // Preu del cotxe
            $table->string('categoria')->nullable(); // Categoria del cotxe
            $table->timestamps(); // Camps de timestamps (created_at i updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotxes');
    }
};

