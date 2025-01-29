<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInventoryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_inventory_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('inventory_id');
            $table->bigInteger('attribute_id');
            $table->string('attribute_value');
            $table->unsignedBigInteger('stock_count');
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
        Schema::dropIfExists('product_inventory_details');
    }
}
