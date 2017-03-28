<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title', 150);
            $table->text('anons');
            $table->text('content');
            $table->string('color', 20)->nullable();
            $table->float('price');

            $table->enum('new', ['0', '1'])->default('0');
            $table->enum('sales_leader', ['0', '1'])->default('0');
            $table->enum('sales', ['0', '1'])->default('0');
            $table->enum('published', ['0', '1'])->default('1');

            $table->string('big_img', 100);
            $table->json('slider_img')->nullable();

            $table->string('keywords', 255)->nullable();
            $table->string('description', 255)->nullable();

            $table->timestamps();

            $table->string('brand_alias', 25);
            $table->foreign('brand_alias')->references('alias')->on('brands');

            $table->string('category_alias', 25);
            $table->foreign('category_alias')->references('alias')->on('categories');

        });
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
