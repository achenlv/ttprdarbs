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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('client_id');
            // $table->foreignId('address_id')->constrained()->onDelete('cascade');
            // $table->bigInteger('client_id')->unsigned();
            $table->string('name');
            $table->text('additional_information')->charset('binary');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        // Schema::table('properties', function (Blueprint $table) {
        //     // Assuming 'properties_address_id_foreign' and 'properties_client_id_foreign' are the correct constraint names
        //     $table->dropForeign('properties_address_id_foreign'); // Corrected to use constraint name
        // });
        Schema::dropIfExists('properties'); // Uncommented this line
    }


};