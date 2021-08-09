<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title1_en');
            $table->string('title2_en');
            $table->string('desc_en');
            $table->string('link_en');

            $table->string('title1_ch');
            $table->string('title2_ch');
            $table->string('desc_ch');
            $table->string('link_ch');

            $table->string('title1_ru');
            $table->string('title2_ru');
            $table->string('desc_ru');
            $table->string('link_ru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
