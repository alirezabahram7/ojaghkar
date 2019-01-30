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
            $table->string('name');
            $table->string('brand')->nullable();
            $table->boolean('tools')->nullable();
            $table->string('service')->nullable();
            $table->string('problem')->nullable();
            $table->text('comment')->nullable();
            $table->date('date')->nullable();
            $table->tinyInteger('time');
            $table->text('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('mobile');
            $table->string('type')->nullable();
            $table->string('code')->nullable();
            $table->integer('user_id')->unsigned()->default(0);
            $table->timestamps();
        });

        Schema::table('orders',function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
