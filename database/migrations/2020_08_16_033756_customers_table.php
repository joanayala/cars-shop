<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('customers', function (Blueprint $table) { 
            $table->increments('id'); 
            $table->string('firstname');
            $table->string('lastname'); 
            $table->string('id_number'); 
            $table->string('city');
            $table->string('mobile_number');
            $table->string('email');
            $table->integer('winner')->nullable();
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
        //
        Schema::drop("customers");
    }
}
