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
        Schema::create('empatkontaks', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', [
                'email',
                'kantor',
                'telepon',
                'whatsapp'
            ]);
            $table->string('isi');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empatkontaks');
    }
};