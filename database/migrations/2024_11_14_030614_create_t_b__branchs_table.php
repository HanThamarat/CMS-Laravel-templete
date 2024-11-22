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
        Schema::create('TB_Branchs', function (Blueprint $table) {
            $table->collation = 'Thai_CI_AS';
            $table->id();
            $table->string("Name_Branch")->nullable()->collation('Thai_CI_AS');
            $table->string("NickName_Branch")->nullable()->collation('Thai_CI_AS');
            $table->string("Zone_Branch")->nullable()->collation('Thai_CI_AS');
            $table->string("Head_Office")->nullable()->collation('Thai_CI_AS');
            $table->string("Branch_Active")->nullable()->collation('Thai_CI_AS');
            $table->string("Province_Branch")->nullable()->collation('Thai_CI_AS');
            $table->string("Branch_Name")->nullable()->collation('Thai_CI_AS');
            $table->string("Address")->nullable()->collation('Thai_CI_AS');
            $table->string("Lat")->nullable()->collation('Thai_CI_AS');
            $table->string("Log")->nullable()->collation('Thai_CI_AS');
            $table->string("PhoneNumber")->nullable()->collation('Thai_CI_AS');
            $table->string("LineID")->nullable()->collation('Thai_CI_AS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TB_Branchs');
    }
};
