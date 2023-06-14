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
        Schema::create('companies', function (Blueprint $table) {
            $table->uuid("id_companies")->primary();
            $table->string("company_name");
            $table->string("company_email")->nullable();
            $table->string("primary_phone")->nullable();
            $table->string("website")->nullable();
            $table->string("fax")->nullable();
            $table->string("category")->nullable();
            $table->string("industry")->nullable();
            $table->boolean("check_customer")->defaultFalse();
            $table->boolean("check_partner")->defaultFalse();
            $table->boolean("check_our_company")->defaultFalse();
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
        Schema::dropIfExists('companies');
    }
};
