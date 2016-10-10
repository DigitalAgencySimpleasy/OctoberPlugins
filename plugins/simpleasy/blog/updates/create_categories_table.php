<?php namespace Simpleasy\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('simpleasy_blog_categories', function(Blueprint $table) {
            Schema::dropIfExists('simpleasy_blog_categories');

            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('simpleasy_blog_categories');
    }
}
