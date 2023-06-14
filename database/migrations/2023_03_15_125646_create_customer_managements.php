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
        Schema::create('customer_managements', function (Blueprint $table) {
            $table->uuid("id_customer")->primary();
            $table->string("nama_customer");
            $table->string("email")->nullable();
            $table->string("website")->nullable();
            $table->string("phone_number")->nullable();
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
        Schema::dropIfExists('customer_managements');
    }
};
