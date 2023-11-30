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
        Schema::create('data_user', function (Blueprint $table) {
            $table->uuid('id')->primary;
            $table->string('name');
            $table->string('phone');
            $table->date('dateofbirth');
            $table->string('gender');
            $table->string('address');
            $table->string('picture')->nullable();
            $table->string('pdf')->nullable();
            $table->string('video')->nullable();

            // add user id foreign key reference to users table
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_user_table');
    }
};
