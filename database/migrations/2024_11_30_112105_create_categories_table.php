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
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 120);
            $table->unsignedBigInteger('parent_id')->default(0)->index();
            $table->string('description', 400)->nullable();
            $table->string('status', 60)->default('published')->index();
            $table->unsignedBigInteger('author_id')->nullable();
            $table->string('author_type')->default('Botble\\\\ACL\\\\Models\\\\User');
            $table->string('icon', 60)->nullable();
            $table->tinyInteger('order')->default(0);
            $table->tinyInteger('is_featured')->default(0);
            $table->unsignedTinyInteger('is_default')->default(0);
            $table->timestamp('created_at')->nullable()->index();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};