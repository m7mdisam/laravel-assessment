<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('objects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('type_id')->index();
            $table->unsignedBigInteger('franchise_id')->nullable()->index();
            $table->unsignedBigInteger('parent_id')->nullable()->index();
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('object_types')->onDelete('cascade');
            $table->foreign('franchise_id')->references('id')->on('objects')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('objects')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('objects');
    }
};
