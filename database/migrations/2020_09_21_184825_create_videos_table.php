<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('servico',1);
            $table->string('title');
            $table->string('desc');
            $table->string('url');
            $table->string('url_hash');
            $table->boolean('fullscreen')->nullable();
            $table->boolean('modestbranding')->nullable();
            $table->boolean('mute')->nullable();
            $table->boolean('controls')->nullable();
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
        Schema::dropIfExists('videos');
    }
}
