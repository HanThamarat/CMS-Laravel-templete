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
        Schema::create('TB_Colors', function (Blueprint $table) {
            $table->collation = 'Thai_CI_AS';
            $table->id();
            $table->string('Name_TH')->nullable()->collation('Thai_CI_AS');
            $table->string('Name_EN')->nullable()->collation('Thai_CI_AS');
            $table->string('Flag')->nullable()->collation('Thai_CI_AS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TB_Colors');
    }
};
