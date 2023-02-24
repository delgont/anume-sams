<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username'); //request on registration
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->num('marital_status', ['m','s'])->default('m');
            $table->num('diabled', ['0','1'])->default('0');
            $table->string('nationality');
            $table->date('date_of_birth');
            $table->string('physical_address');
            $table->string('postal_address')->nullable();
            $table->string('primary_phone');
            $table->string('secondary_phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('applicants');
    }
}
