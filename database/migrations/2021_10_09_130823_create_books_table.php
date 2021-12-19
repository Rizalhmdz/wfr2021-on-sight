<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('cover');
            $table->string('author');
            $table->string('category');
            $table->decimal('price');
            $table->text('description');
            $table->string('publisher');
            $table->date('publish_date');
            $table->integer('pages');
            $table->string('language');
            $table->timestamp('updated_at')->nullable(); 
            $table->timestamp('created_at')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
