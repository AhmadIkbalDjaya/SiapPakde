<?php

use App\Models\Bpd;
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
        Schema::create('bpd_members', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Bpd::class);
            $table->string('nama');
            $table->string('jabatan');
            $table->string('keterwakilan_dusun');
            $table->timestamps();

            $table->foreign('bpd_id')->references('id')->on('bpds');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bpd_members');
    }
};
