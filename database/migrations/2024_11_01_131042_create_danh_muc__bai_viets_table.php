<?php

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
        Schema::create('danh_muc__bai_viets', function (Blueprint $table) {
            $table->id();
            $table->string('ten_danh_muc')->unique();
            $table->string('anh_danh_muc')->nullable();
            $table->string('slug')->unique();
            $table->text('mo_ta_bai_viet')->nullable();
            $table->integer('thu_tu')->default(0);
            $table->boolean('trang_thai')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danh_muc__bai_viets');
    }
};
