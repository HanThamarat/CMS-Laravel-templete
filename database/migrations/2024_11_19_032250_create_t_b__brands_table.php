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
        Schema::create('TB_Brands', function (Blueprint $table) {
            $table->collation = 'Thai_CI_AS';
            $table->id();
            $table->string("Brand_Name")->nullable()->collation('Thai_CI_AS');
            $table->string("UserZone")->nullable()->collation('Thai_CI_AS');
            $table->string("UserBranch")->nullable()->collation('Thai_CI_AS');
            $table->string("UserInsert")->nullable()->collation('Thai_CI_AS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TB_Brands');
    }
};
