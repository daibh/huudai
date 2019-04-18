<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('code', 36);
            $table->string('name');
            $table->string('description');
            $table->unsignedTinyInteger('type');
            $table->bigInteger('cost');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->dateTime('affect_at');
            $table->dateTime('affect_end')->nullable();
            $table->unsignedTinyInteger('status')->index();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
