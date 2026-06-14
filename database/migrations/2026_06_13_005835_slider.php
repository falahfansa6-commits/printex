<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sliders', function (Blueprint $table) {

            $table->id();

            $table->string('judul');

            $table->string('gambar');

            $table->enum('posisi', [
                'beranda',
                'pelayanan'
            ]);

            $table->boolean('status')->default(true);

            $table->integer('urutan')->default(1);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};