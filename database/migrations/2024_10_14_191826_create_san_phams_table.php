<?php

use App\Models\DanhMuc;
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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DanhMuc::class)->constrained();
            $table->string('ma_san_pham')->unique();
            $table->string('ten_san_pham');
            $table->unsignedBigInteger('gia_san_pham');
            $table->string('image_path')->nullable();
            $table->text('mo_ta_san_pham')->nullable();
            $table->unsignedBigInteger('so_luong');
            $table->unsignedBigInteger('khuyen_mai')->nullable();
            $table->boolean('trang_thai')->default(true);
            $table->boolean('is_new')->default(true);
            $table->boolean('is_hot')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
