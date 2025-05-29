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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->comment('Name of file');
            $table->string('file_type')->comment('Type of file');
            $table->integer('file_size')->comment('Size of file')->nullable();
            $table->string('URL')->comment('URL');
            $table->timestamp('upload_date')->comment('Date of upload');
            $table->string('Description')->comment('Description');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
