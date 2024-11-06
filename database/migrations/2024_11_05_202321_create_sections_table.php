<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\Company::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->softDeletes('deleted_at', precision: 0);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
