<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi: membuat tabel sales.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->bigInteger('quantity'); // jumlah penjualan (misalnya dalam unit)
            $table->bigInteger('points_earned'); // jumlah poin yang diperoleh
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Rollback migrasi: menghapus tabel sales.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
