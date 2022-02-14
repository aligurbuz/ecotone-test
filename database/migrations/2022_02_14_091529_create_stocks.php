<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('stock_code')->default(0)->unique();
            $table->bigInteger('product_code')->index();

            $table->integer('idwarehouse')->comment('');
            $table->integer('stock')->default(0)->comment('');
            $table->integer('reserved')->default(0)->comment('');
            $table->integer('reservedbackorders')->default(0)->comment('');
            $table->integer('reservedpicklists')->default(0)->comment('');
            $table->integer('reservedallocations')->default(0)->comment('');
            $table->char('freestock')->nullable(true)->comment('');

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

        pushMigration('stocks','stocks','stock');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
