<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable(false);
            $table->string('last_name')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('business_name');
            $table->string('phone_number')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('vat_number');
            $table->string('fiscal_code')->nullable(false);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}