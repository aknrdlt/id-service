<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitlesToTypeOfServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('type_of_services', function (Blueprint $table) {
            $table->text('desc_en')->after('word_en');
            $table->text('desc_ch')->after('word_ch');
            $table->text('desc_ru')->after('word_ru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('type_of_services', function (Blueprint $table) {
            $table->dropColumn('desc_en');
            $table->dropColumn('desc_ch');
            $table->dropColumn('desc_ru');
        });
    }
}
