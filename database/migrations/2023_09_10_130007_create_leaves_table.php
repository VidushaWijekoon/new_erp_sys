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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('leave_type');
            $table->date('fromDate');
            $table->date('toDate');
            $table->integer('number_of_days');
            $table->string('leave_reason');
            $table->tinyInteger('status')->default('0')->comment('0=Not Approved, 1=Approved');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('approved_by')->default('0');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
