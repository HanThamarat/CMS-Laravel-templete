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
        Schema::create('TB_Zones', function (Blueprint $table) {
            $table->collation = 'Thai_CI_AS';
            $table->id();
            $table->string('Zone_Name')->nullable()->collation('Thai_CI_AS');
            $table->string('Zone_Code')->nullable()->collation('Thai_CI_AS');
            $table->string('Flag')->nullable()->collation('Thai_CI_AS');
            $table->string('Zone_Name_TH')->nullable()->collation('Thai_CI_AS'); // เพิ่มฟิลด์ Zone_Name_TH
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TB_Zones');
    }
};
