<?php

use App\Models\Desa;
use App\Models\Kecamatan;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->unsigned()->default(2);
            $table->foreignIdFor(Desa::class)->nullable();
            $table->foreignIdFor(Kecamatan::class)->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('desa_id')->references('id')->on('desas')->onDelete('cascade');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
