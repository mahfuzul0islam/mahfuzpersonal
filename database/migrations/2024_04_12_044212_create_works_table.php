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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title_image');
            $table->string('work_title');
            $table->string('work_title_slug');
            $table->string('working_dates')->nullable();
            $table->string('client')->nullable();
            $table->string('website')->nullable();

            $table->string('First_image')->nullable();
            $table->string('First_title')->nullable();
            $table->text('First_detail')->nullable();
            
            $table->string('second_image')->nullable();
            $table->string('second_title')->nullable();
            $table->text('second_detail')->nullable();
            
            $table->string('third_image')->nullable();
            $table->string('third_title')->nullable();
            $table->text('third_detail')->nullable();
            
            $table->string('forth_image')->nullable();
            $table->string('forth_title')->nullable();
            $table->text('forth_detail')->nullable();
            
            $table->string('fifth_image')->nullable();
            $table->string('fifth_title')->nullable();
            $table->text('fifth_detail')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
