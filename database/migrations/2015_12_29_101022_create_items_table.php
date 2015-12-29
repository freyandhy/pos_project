<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('suppliers_id')->index();
            $table->string('barcode');
            $table->string('code');
            $table->string('name');
            $table->double('buy_price');
            $table->double('sell_price');
            $table->integer('stock');
            $table->integer('min_disc');
            $table->double('disc');
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
        Schema::drop('items');
    }
}
