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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->date('birthday');
            $table->string('passport_number');
            $table->tinyInteger('visa_type');
            $table->date('visa_expiring');
            $table->string('contact_number');
            $table->string('current_address');
            $table->string('resident_country');
            $table->string('emergency_number');
            $table->unsignedBigInteger('department');
            $table->date('join_date');
            $table->string('special_note');
            $table->unsignedBigInteger('created_by');
            $table->foreign('department')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
