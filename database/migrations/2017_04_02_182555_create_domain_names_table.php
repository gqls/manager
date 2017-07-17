<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('extension');
            $table->dateTime('last_bought_date')->nullable();
            $table->dateTime('last_sold_date')->nullable();
            $table->tinyInteger('sold')->default(null)->nullable();
            $table->string('venue')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('registrar')->default('unknown');
            $table->decimal('price');
            $table->string('whois_records');
            $table->string('currency');
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
        Schema::dropIfExists('domain_names');
    }
}
