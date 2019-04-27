<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLsProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ls_product_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->bigInteger('parent')->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('editable')->default(1);
            $table->boolean('removable')->default(1);
            $table->timestamps();
        });

        $this->load();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ls_product_categories');
    }

    private function load(){
        $cat = new \Willywes\Larastore\Models\ProductCategory();
        $cat->name = 'Uncategorized';
        $cat->slug = 'uncategorized';
        $cat->removable = false;
        $cat->save();
    }
}
