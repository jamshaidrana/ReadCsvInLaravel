<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsvReadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csv_readers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('practise_id')->nullable();
            $table->bigInteger('warning_id')->nullable();
            $table->bigInteger('warning_code')->nullable();
            $table->string('warning_description')->nullable();
            $table->bigInteger('allow_edit')->nullable();
            $table->bigInteger('record_deleted')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('location_id')->nullable();
            $table->string('record_converted')->nullable();
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
        Schema::dropIfExists('csv_readers');
    }
}
