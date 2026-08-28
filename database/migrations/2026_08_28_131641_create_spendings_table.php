<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('spendings', function (Blueprint $table) {
            $table->id('spending_id');

            $table->unsignedBigInteger('employee_id');

            $table->date('spending_date');

            $table->decimal('value', 12, 2);

            $table->foreign('employee_id')
                ->references('employee_id')
                ->on('employees')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('spendings');
    }
};