<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_versions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('version');
            $table->string('link');
            $table->string('code');
            $table->string('video_one');
            $table->string('video_two');
            $table->string('banner_one');
            $table->string('banner_two');
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
        Schema::dropIfExists('g_versions');
    }
}
