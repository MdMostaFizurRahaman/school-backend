<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('financial_organization_id')->unsigned();
            $table->bigInteger('store_id')->unsigned()->nullable();
            $table->string('account_name', 255);
            $table->string('account_no', 100)->nullable();
            $table->string('branch', 50)->nullable();
            $table->tinyInteger('account_type')->nullable();
            $table->string('swift_code', 100)->nullable();
            $table->string('route_no', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('financial_organization_id')->references('id')->on('financial_organizations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
}
