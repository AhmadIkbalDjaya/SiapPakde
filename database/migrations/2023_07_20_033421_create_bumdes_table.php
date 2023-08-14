<?php

use App\Models\Desa;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bumdes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Desa::class);
            $table->string('nama');
            $table->string('direktur');
            $table->boolean('sertifikasi')->default(false);
            $table->integer('jumlah_pegawai')->unsigned()->default(0);
            $table->string('unit_usaha');
            $table->string('file_sertifikat')->nullable();
            $table->string('phone');
            $table->timestamps();

            $table->foreign('desa_id')->references('id')->on('desas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bumdes');
    }
};
