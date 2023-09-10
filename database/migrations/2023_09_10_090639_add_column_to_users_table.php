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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique();
            $table->unsignedBigInteger('emp_id')->unique()->nullable();
            $table->smallInteger('created_by')->nullable();
            $table->unsignedBigInteger('role')->default('0')->comment('0=User, 1=Admin, 2=SuperAdmin');
            $table->tinyInteger('status')->default('0')->comment('0=Inactive, 1=Active');
            $table->foreign('emp_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('role')->references('id')->on('designations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
