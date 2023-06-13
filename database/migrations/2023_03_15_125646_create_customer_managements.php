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
            $table->id("id_customer");
            $table->string("nama_customer");
            $table->string("email");
            $table->string("website");
            $table->string("phone_number");
            $table->boolean("is_active")->default(false);
            $table->boolean("check_customer")->default(false);
            $table->boolean("check_partner")->default(false);
            $table->boolean("check_competitor")->default(false);
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
