<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateHistorySearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_search', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->text('shop_click');
            $table->text('product_wishlist_url');
            $table->text('product_click_url');
            $table->string('product_name');
            $table->string('product_uri');
            $table->text('product_img_url');
            $table->string('product_price_format');
            $table->string('shop_location');
            $table->string('shop_name');
            $table->string('custom_text');
            $table->integer('site_category_id');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_search');
    }
}
