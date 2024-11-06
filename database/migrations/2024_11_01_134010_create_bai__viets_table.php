<?php

use App\Models\Danh_muc_Bai_viet;
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
        Schema::create('bai_viets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Danh_muc_Bai_viet::class)->constrained();
            $table->string('title', 255); // Tiêu đề bài viết
            $table->string('slug', 255)->unique(); // Đường dẫn thân thiện
            $table->text('content'); // Nội dung bài viết
            $table->text('excerpt')->nullable(); // Tóm tắt bài viết
            $table->string('thumbnail')->nullable(); // Ảnh đại diện
            $table->enum('status', ['Nháp', 'Đã Xuất Bản', 'Đã Lưu Trữ'])->default('Nháp'); // Trạng thái bài viết
            $table->integer('views')->default(0); // Số lượt xem
            $table->timestamps(); // Ngày tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bai__viets');
    }
};
