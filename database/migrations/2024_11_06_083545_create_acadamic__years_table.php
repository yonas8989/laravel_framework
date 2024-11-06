<?php

use App\Models\Company;
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
        Schema::create('acadamic__years', function (Blueprint $table) {
            $table->id();
            $table->year("year");
            $table->string("title");
            $table->foreignIdFor(Company::class)->constrained()->cascadeOnDelete();
            $table->date('starting_period');
            $table->date('ending_period');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acadamic__years');
    }
};
