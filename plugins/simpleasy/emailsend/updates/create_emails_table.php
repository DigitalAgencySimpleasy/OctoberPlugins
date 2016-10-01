<?php namespace Simpleasy\Emailsend\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateEmailsTable extends Migration
{
    public function up()
    {
        Schema::create('simpleasy_emailsend_emails', function(Blueprint $table) {
            Schema::dropIfExists('simpleasy_emailsend_emails');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('sender')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('simpleasy_emailsend_emails');
    }
}
