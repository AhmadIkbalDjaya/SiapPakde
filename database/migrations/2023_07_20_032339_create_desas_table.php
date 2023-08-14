<?php

use App\Models\Kecamatan;
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
        Schema::create('desas', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->longText('potensi')->nullable();
            $table->bigInteger('jumlah_penduduk');
            $table->string('contact');
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->foreignIdFor(Kecamatan::class);
            $table->timestamps();

            $table->foreign('kecamatan_id')->references("id")->on("kecamatans")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desas');
    }
};
