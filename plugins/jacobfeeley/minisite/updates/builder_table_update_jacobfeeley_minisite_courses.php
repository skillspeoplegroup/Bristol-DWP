<?php namespace JacobFeeley\Minisite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJacobfeeleyMinisiteCourses extends Migration
{
    public function up()
    {
        Schema::table('jacobfeeley_minisite_courses', function($table)
        {
            $table->string('tag_line')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jacobfeeley_minisite_courses', function($table)
        {
            $table->dropColumn('tag_line');
        });
    }
}
