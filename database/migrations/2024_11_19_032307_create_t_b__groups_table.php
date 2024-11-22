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
        Schema::create('TB_Groups', function (Blueprint $table) {
            $table->collation = 'Thai_CI_AS';
            $table->id();
            $table->integer("Brand_ID");
            $table->string("Group_Name")->collation('Thai_CI_AS');
            $table->string("UserZone")->collation('Thai_CI_AS');
            $table->string("UserBranch")->collation('Thai_CI_AS');
            $table->string("UserInsert")->collation('Thai_CI_AS');
            $table->string("Flag")->collation('Thai_CI_AS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TB_Groups');
    }
};
