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
        Schema::create('perangkat_desas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Desa::class);
            $table->string('nama');
            $table->string('jabatan');
            $table->integer('usia')->unsigned();
            $table->string('pendidikan');
            $table->string('agama');
            $table->string('foto')->default('prangkatDesa/default.jpg');
            $table->timestamps();

            $table->foreign('desa_id')->references('id')->on('desas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perangkat_desas');
    }
};
