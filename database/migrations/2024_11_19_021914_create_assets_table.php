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
        Schema::create('Assets', function (Blueprint $table) {
            $table->collation = 'Thai_CI_AS';
            $table->id();
            $table->integer('AssetTYP')->nullable();
            $table->string('AssetStatus')->nullable()->collation('Thai_CI_AS');
            $table->integer('CusID')->nullable();
            $table->string('AssetCode')->nullable()->collation('Thai_CI_AS');
            $table->string('AssetPrice')->nullable()->collation('Thai_CI_AS');
            $table->string('CRCONST')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_OldLicense')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_OldText')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_OldNumber')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_OldProvice')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_NewLicense')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_NewText')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_NewNumber')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_NewProvice')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_Chassis')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_NewChassis')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_Engine')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_Color')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_Miles')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_CC')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_Type')->nullable()->collation('Thai_CI_AS');
            $table->integer('Vehicle_Type_PTL')->nullable();
            $table->integer('Vehicle_Brand')->nullable();
            $table->integer('Vehicle_Group')->nullable();
            $table->integer('Vehicle_Model')->nullable();
            $table->string('Vehicle_Year')->nullable()->collation('Thai_CI_AS');
            $table->string('Vehicle_Gear')->nullable()->collation('Thai_CI_AS');
            $table->integer('UserZone')->nullable();
            $table->integer('UserBrand')->nullable();
            $table->integer('UserInsert')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Assets');
    }
};
