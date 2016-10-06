<?php namespace Simpleasy\Slider\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSlidesTable extends Migration
{
    public function up()
    {
        Schema::create('simpleasy_slider_slides', function(Blueprint $table) {
            Schema::dropIfExists('simpleasy_slider_slides');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('header')->nullable();
            $table->text('description')->nullable();
            $table->string('link_title')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('simpleasy_slider_slides');
    }
}
