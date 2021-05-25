<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('location_id');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('country_code', 10)->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->integer('man_hours')->nullable();
            $table->decimal('profit')->nullable();
            $table->decimal('cost')->nullable();
            $table->decimal('total')->nullable();
            $table->decimal('tax')->nullable();
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
        Schema::dropIfExists('work_orders');
    }
}
