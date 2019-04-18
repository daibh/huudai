<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('code')->nullable();
            $table->string('route')->nullable();
            $table->string('state');
            $table->string('mainState')->nullable();
            $table->string('shortLabel');
            $table->string('target')->nullable();
            $table->string('type')->nullable();
            $table->string('icon')->nullable();
            $table->string('badge')->nullable();
            $table->smallInteger('sequence', false, true);
            $table->bigInteger('parentId', false, true)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('parentId')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
