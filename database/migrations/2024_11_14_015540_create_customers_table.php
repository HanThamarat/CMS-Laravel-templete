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
        Schema::create('Customers', function (Blueprint $table) {
            $table->id();
            $table->string('CusID_CK')->nullable()->collation('Thai_CI_AS');
            $table->integer('PrefixName')->nullable(); // this feild is a reletion with TB_PrefixName
            $table->string('FirstName_TH')->nullable()->collation('Thai_CI_AS');
            $table->string('MiddleName_TH')->nullable()->collation('Thai_CI_AS');
            $table->string('Lastname_TH')->nullable()->collation('Thai_CI_AS');
            $table->string('FirstName_EN')->nullable()->collation('Thai_CI_AS');
            $table->string('MiddleName_EN')->nullable()->collation('Thai_CI_AS');
            $table->string('Lastname_EN')->nullable()->collation('Thai_CI_AS');
            $table->string('Nickname_TH')->nullable()->collation('Thai_CI_AS');
            $table->string('Nickname_EN')->nullable()->collation('Thai_CI_AS');
            $table->string('IDCard')->nullable()->collation('Thai_CI_AS');
            $table->date('IDCard_issus')->nullable();
            $table->date('IDCard_expire')->nullable();
            $table->date('Birthday')->nullable();
            $table->integer('Gender')->nullable(); // this feild is a reletion with TB_Genders
            $table->string('PhoneNumber_Primary')->nullable()->collation('Thai_CI_AS');
            $table->string('PhoneNumber_Secondary')->nullable()->collation('Thai_CI_AS');
            $table->string('Nationality')->nullable()->collation('Thai_CI_AS');
            $table->string('Religion')->nullable()->collation('Thai_CI_AS');
            $table->string('Driver_Licence')->nullable()->collation('Thai_CI_AS');
            $table->string('Social_Line')->nullable()->collation('Thai_CI_AS');
            $table->string('Social_Facebook')->nullable()->collation('Thai_CI_AS');
            $table->string('Marital_Status')->nullable()->collation('Thai_CI_AS');
            $table->string('note')->nullable()->collation('Thai_CI_AS');
            $table->string('UserInsert')->nullable()->collation('Thai_CI_AS');
            $table->string('UserBranch')->nullable()->collation('Thai_CI_AS');
            $table->string('UserZone')->nullable()->collation('Thai_CI_AS');
            $table->string('Status')->nullable()->collation('Thai_CI_AS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
