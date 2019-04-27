<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ls_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            $table->string('sku')->nullable();

            $table->float('normal_price', 13, 2)->default(0);
            $table->float('reduced_price', 13, 2)->nullable();

            $table->float('weight', 9, 3)->nullable();
            $table->float('length', 9, 3)->nullable();
            $table->float('height', 9, 3)->nullable();
            $table->float('width', 9, 3)->nullable();

            $table->bigInteger('product_category_id')->unsigned()->nullable();
            $table->foreign('product_category_id')->references('id')->on('ls_product_categories')->onDelete('set null');

            $table->boolean('active')->default(1);
            $table->boolean('editable')->default(1);
            $table->boolean('removable')->default(1);
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
        Schema::dropIfExists('ls_products');
    }
}
