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
        Schema::create('sent', function (Blueprint $table) {
            $table->uuid('sent_id');
            $table->text('symkey');

            // add request_id foreign key reference to request table
            $table->uuid('request_id');
            $table->foreign('request_id')->references('id')->on('request')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sent');
    }
};
