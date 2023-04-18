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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('id_gallery');
            $table->string('name');
            $table->text('description');
            $table->string('tech_used');
            $table->string('project_url');
            $table->string('git_repo');
            $table->text('responsibility');
            $table->text('challenge');
            $table->text('accomplishment');
            $table->text('lesson_learned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
