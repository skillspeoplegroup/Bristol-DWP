<?php namespace JacobFeeley\Minisite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJacobfeeleyMinisiteTestimonials extends Migration
{
    public function up()
    {
        Schema::create('jacobfeeley_minisite_testimonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name')->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jacobfeeley_minisite_testimonials');
    }
}
