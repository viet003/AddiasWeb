<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id(); // Tạo cột detail_id là khóa chính
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Khóa ngoại liên kết với bảng products
            $table->string('type_product', 255);
            $table->string('color_product', 20);
            $table->string('size_product', 20);
            $table->string('producer', 255)->nullable();
            $table->string('describe', 2000)->nullable();
            $table->string('extend', 2000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
