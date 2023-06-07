<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('registration_id');
            $table->bigInteger('employment_status_id');
            $table->string('email');
            $table->string('income');
            $table->bigInteger('gender_id');
            $table->bigInteger('marital_status_id');
            $table->date('date_of_birth');
            $table->bigInteger('residential_type_id');
            $table->string('residential_address');
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
        Schema::dropIfExists('loan_details');
    }
};
