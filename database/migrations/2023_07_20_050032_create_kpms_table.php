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
        Schema::create('kpms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Desa::class);
            $table->string('nama');
            $table->string('jabatan');
            $table->timestamps();

            $table->foreign('desa_id')->references('id')->on('desas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kpms');
    }
};
