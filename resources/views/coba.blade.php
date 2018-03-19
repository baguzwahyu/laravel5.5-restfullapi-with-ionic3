<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('OrderID', 30)->primary();
            $table->integer('CustomerID');
            $table->string('OrderNumber');
            $table->integer('PaymentID');
            $table->string('OrderDate');
            $table->string('ShipDate');
            $table->string('RequiredDate');
            $table->string('ShipperID');
            $table->string('Freight');
            $table->string('SalesTax');
            $table->timestamps();
            $table->string('TransactStatus');
            $table->string('ErrLoc');
            $table->string('ErrMsg');
            $table->string('Fulfilled');
            $table->string('Deleted');
            $table->string('Paid');
            $table->string('PaymentDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
