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
        Schema::create('clients', function (Blueprint $table) {
          $table->id();
          $table->foreignId('address_id')->constrained()->onDelete('cascade');
          $table->string('name');
          $table->string('identifier', length: 11)->unique();
          $table->text('additional_information')->charset('binary');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      // Schema::table('clients', function (Blueprint $table) {
      //   $table->dropForeign(['address_id']);
      // });
      Schema::dropIfExists('clients');
    }
};
