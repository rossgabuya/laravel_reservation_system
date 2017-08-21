<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermaCustomerAccTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('perma_customer_acc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('contact_no');
            $table->string('username');
            $table->string('password');
            $table->boolean('is_active');
            $table->string('reg_ip');
            $table->string('reg_browser');
            $table->string('confirm_ip');
            $table->string('confirm_browser');
            $table->rememberToken();
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
        Schema::drop('perma_customer_acc');
    }
}
