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
        Schema::create('sensors', function (Blueprint $table) {
          $table->id();
          $table->foreignId('device_id')->constrained()->onDelete('cascade');
          $table->string('type');
          $table->string('status');
          $table->text('additional_information')->charset('binary');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      // Schema::table('sensors', function (Blueprint $table) {
      //   $table->dropForeign(['device_id']);
      // });
      Schema::dropIfExists('sensors');
    }
};
