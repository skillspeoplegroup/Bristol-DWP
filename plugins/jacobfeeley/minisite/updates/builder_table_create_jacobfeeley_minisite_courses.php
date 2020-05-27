<?php namespace JacobFeeley\Minisite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJacobfeeleyMinisiteCourses extends Migration
{
    public function up()
    {
        Schema::create('jacobfeeley_minisite_courses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('summary')->nullable();
            $table->text('skills')->nullable();
            $table->text('topics_covered')->nullable();
            $table->text('about_this_field')->nullable();
            $table->text('why_join')->nullable();
            $table->text('who_for')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jacobfeeley_minisite_courses');
    }
}
