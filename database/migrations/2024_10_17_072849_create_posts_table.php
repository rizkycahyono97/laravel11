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
        Schema::create('posts', function (Blueprint $table) {
            
            $table->id();
            $table->string('title');
            // $table->string('username')->unique();
            // $table->unsignedBigInteger('author_id');
            // $table->foreign('author_id')->references('id')->on('users'); // references => Foreign Key Constraints
            $table->foreignId('author_id')->constrained( // menggunakan yang constraint
                table: 'users', 
                indexName: 'posts_author_id'
            );
            // foreign key ke category
            $table->foreignId('category_id')->constrained( // menggunakan yang constraint
                table: 'categories', 
                indexName: 'posts_category_id'
            );
            $table->string('slug')->unique();
            $table->text('body');
            $table->timestamps();

            // $table->id();
            // $table->string('title');
            // $table->text('body');
            // $table->unsignedBigInteger('category_id'); // Kolom foreign key
            // $table->timestamps();
        
            // // Tambahkan foreign key
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
 
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
