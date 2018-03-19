            $table->increments('id');
            $table->integer('shippers_id')->unsigned();
            $table->integer('payments_id')->unsigned();
            $table->integer('customers_id')->unsigned();
            $table->timestamps();
            $table->foreign('shippers_id')->references('id')->on('shippers');
            $table->foreign('payments_id')->references('id')->on('payments');
            $table->foreign('customers_id')->references('id')->on('customers');




orderdetail

            $table->string('OrderNumber');
            $table->string('Price');
            $table->string('Quantity');
            $table->string('Discount');
            $table->string('Total');
            $table->string('IDSKU');
            $table->string('Size');
            $table->string('Color');
            $table->string('Fulfilled');
            $table->string('ShipDate');
            $table->string('BillDate');