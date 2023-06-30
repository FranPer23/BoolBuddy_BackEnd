<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_subscription', function (Blueprint $table) {
            $table->unsignedBigInteger('profile_id')->nullable();
            $table->foreign('profile_id')->on('profiles')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('subscription_id')->nullable();
            $table->foreign('subscription_id')->on('subscriptions')->references('id')->onDelete('cascade');

            $table->primary(['profile_id', 'subscription_id']);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
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
        Schema::dropIfExists('profile_subscription');
    }
};
