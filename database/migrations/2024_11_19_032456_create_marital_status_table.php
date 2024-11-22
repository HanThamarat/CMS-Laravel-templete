<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaritalStatusTable extends Migration
{
    public function up()
    {
        Schema::create('TB_marital_statuses', function (Blueprint $table) {
            $table->collation = 'Thai_CI_AS';
            $table->id();
            $table->string('name_status_marital_th')->collation('Thai_CI_AS');
            $table->string('name_status_marital_en')->collation('Thai_CI_AS');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('TB_marital_statuses');
    }
}


