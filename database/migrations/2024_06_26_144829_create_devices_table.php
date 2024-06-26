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
    Schema::create('devices', function (Blueprint $table) {
      $table->id();
      $table->foreignId('property_id')->constrained()->onDelete('cascade');
      // $table->unsignedBigInteger('property_id');
      // $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
      $table->string('manudacturer');
      $table->string('model');
      $table->string('serial_number');
      $table->timestamps();
      $table->text('additional_information')->charset('binary');
      $table->timestamp('provided_at', precision: 0);
    });

    // Uncomment the following lines if you want to add the foreign key constraint after creating the table
    // Schema::table('devices', function (Blueprint $table) {
    //     $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
    // });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    // Schema::table('devices', function (Blueprint $table) {
    //   $table->dropForeign(['property_id']);
    // });
    Schema::dropIfExists('devices');
  }
};
