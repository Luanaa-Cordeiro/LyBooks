<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome');

            // Foreign keys com CASCADE
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade');
            $table->foreignId('language_id')->constrained('languages')->onDelete('cascade');
            $table->foreignId('genero_id')->constrained('generos')->onDelete('cascade');
            $table->foreignId('editor_id')->constrained('editors')->onDelete('cascade');
            $table->string('image_path')->nullable(); // Caminho da imagem

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

