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
        Schema::create('offers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('status')->index();
            $table->foreignId('category_id')->index();
            $table->string('budget');
            $table->string('frequency');
            $table->text('details');
            $table->string('type');
            $table->string('contact');


            $table->string('email')->index();
            $table->string('contact_name');
            $table->string('company_name');
            $table->string('website');
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
        Schema::dropIfExists('offers');
    }
};
