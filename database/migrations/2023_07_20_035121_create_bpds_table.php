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
        Schema::create('bpds', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Desa::class);
            $table->string('sk_periode');
            $table->timestamps();

            $table->foreign('desa_id')->references('id')->on('desas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bpds');
    }
};
