<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('website_name')->unique();
            $table->string('title');
            $table->string('logo');
            $table->string('about_img');
            $table->string('description');
            $table->string('banner_img');
            $table->string('banner_texts');
            $table->string('facebook_link')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('email')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('phone_number');
            $table->string('biz_address');
            $table->string('biz_type');
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
        Schema::dropIfExists('infos');
    }
}
