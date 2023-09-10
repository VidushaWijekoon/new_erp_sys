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
            $table->tinyInteger('gender')->comment('0=Male, 1=Female');
            $table->date('birthday');
            $table->string('passport_number');
            $table->string('passport_expiring');
            $table->tinyInteger('visa_type')->comment('0=Visit Visa, 1=Cancel Visa, 2=Family Visa, 3=Freelance Visa, 4=Own Visa, 5=Student Visa');
            $table->date('visa_expiring');
            $table->string('contact_number');
            $table->string('current_address');
            $table->unsignedBigInteger('resident_country');
            $table->string('emergency_number');
            $table->string('image');
            $table->unsignedBigInteger('department');
            $table->unsignedBigInteger('designation');
            $table->date('join_date');
            $table->string('special_note');
            $table->tinyInteger('status')->default('0')->comment('0=InActive, 1=Active');
            $table->tinyInteger('account_status')->default('0')->comment('0=no create, 1=created');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('department')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('designation')->references('id')->on('designations')->onDelete('cascade');
            $table->foreign('resident_country')->references('id')->on('countries')->onDelete('cascade');
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
