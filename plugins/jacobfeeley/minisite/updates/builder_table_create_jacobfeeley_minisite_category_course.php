<?php namespace JacobFeeley\Minisite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJacobfeeleyMinisiteCategoryCourse extends Migration
{
    public function up()
    {
        Schema::create('jacobfeeley_minisite_category_course', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('course_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jacobfeeley_minisite_category_course');
    }
}
