<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('address_line_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip', 25);
            $table->string('country', 10);
        });

        Schema::create('billing_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('address_line_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip', 25);
            $table->string('country', 10);
        });

        Schema::create('service_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('address_line_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip', 25);
            $table->string('country', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
        Schema::dropIfExists('billing_locations');
        Schema::dropIfExists('service_locations');
    }
}
