<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRestaurantNameToDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->string('restaurant_name')->nullable()->after('address'); // Add restaurant_name column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->dropColumn('restaurant_name');
        });
    }
}
