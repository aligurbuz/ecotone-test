<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_code')->default(0)->unique();

            $table->integer('idvatgroup')->comment('Linked to resource Vatgroups');
            $table->char('name')->comment('Name of product');
            $table->double('price')->comment('Price excluding VAT');
            $table->double('fixedstockprice')->default(0)->comment('Fixed stock price of product excluding VAT');
            $table->integer('idsupplier')->default(0)->comment('Linked to resource Suppliers');
            $table->char('productcode_supplier')->nullable(true)->comment('Product code of this product at supplier, used for purchase orders');
            $table->integer('deliverytime')->default(0)->comment('Delivery time from supplier in days');
            $table->char('description')->nullable(true)->comment('Longer description of product');
            $table->char('barcode')->nullable(true)->comment('Barcode (usually GS1, EAN13 or UPC code)');
            $table->char('type')->nullable(true)->comment('Only options: normal (default), unlimited_stock, virtual_composition, composition_with_stock');
            $table->boolean('unlimitedstock')->default(0)->comment('Deprecated in favor of \'type\'. When unlimited stock is true, no stock will be monitored for this product');
            $table->integer('weight')->default(0)->comment('Weight of this product in grams');
            $table->integer('length')->default(0)->comment('Length of this product in centimeters. Not available for virtual compositions');
            $table->integer('width')->default(0)->comment('Width of this product in centimeters. Not available for virtual compositions');
            $table->integer('height')->default(0)->comment('Height of this product in centimeters. Not available for virtual compositions');
            $table->integer('minimum_purchase_quantity')->default(0)->comment('The minimum amount you need to purchase from your supplier');
            $table->integer('purchase_in_quantities_of')->default(0)->comment('If you need to purchase this products in batches of x pieces');
            $table->char('hs_code')->default(0)->comment('HS Code for customs');
            $table->char('country_of_origin')->default(0)->comment('Country of origin of this product for customs (needs to be ISO 3166 2-char code)');
            $table->char('idfulfilment_customer')->default(0)->comment('Only for Picqer Fulfilment: Linked to belonging fulfilment customer');

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            $table->boolean('status')->default(1)->comment('0:active 1:passive');
            $table->boolean('is_deleted')->default(0)->comment('0:notDeleted 1:deleted');
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->index(['status','is_deleted']);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        pushMigration('products','products','product');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
