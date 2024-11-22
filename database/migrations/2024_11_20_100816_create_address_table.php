<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Address', function (Blueprint $table) {
            $table->collation = 'Thai_CI_AS';
            $table->id();
            $table->unsignedBigInteger('data_cus_id')->nullable();
            $table->string('registration_number')->nullable()->collation('Thai_CI_AS');
            $table->dateTime('date_adds')->nullable();
            $table->string('code_adds')->nullable()->collation('Thai_CI_AS');
            $table->integer('ordinal_adds')->nullable();
            $table->string('status_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('type_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('house_number_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('house_group_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('building_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('village_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('room_number_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('floor_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('alley_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('road_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('house_zone_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('house_province_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('house_district_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('house_tambon_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('postal_adds')->nullable()->collation('Thai_CI_AS');
            $table->text('detail_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('coordinates_adds')->nullable()->collation('Thai_CI_AS');
            $table->string('user_zone')->nullable()->collation('Thai_CI_AS');
            $table->string('user_branch')->nullable()->collation('Thai_CI_AS');
            $table->string('user_insert')->nullable()->collation('Thai_CI_AS');
            $table->string('user_update')->nullable()->collation('Thai_CI_AS');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Address');
    }
}
