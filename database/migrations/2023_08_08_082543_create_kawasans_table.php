<?php

use App\Models\DesaKawasan;
use App\Models\KategoriKawasan;
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
        Schema::create('kawasans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(KategoriKawasan::class);
            $table->foreignIdFor(DesaKawasan::class);
            $table->string('nama');
            $table->string('foto');
            $table->string('deskripsi')->nullable();

            $table->foreign("kategori_kawasan_id")->references('id')->on("kategori_kawasans")->onDelete("cascade");
            $table->foreign("desa_kawasan_id")->references('id')->on("desa_kawasans")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kawasans');
    }
};
