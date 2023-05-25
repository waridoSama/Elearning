<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role');
            $table->unsignedBigInteger('related_id')->nullable();
            $table->timestamps();

            // Additional columns specific to your application
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');

            // Foreign key relationships
            $table->foreign('related_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('related_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('related_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
