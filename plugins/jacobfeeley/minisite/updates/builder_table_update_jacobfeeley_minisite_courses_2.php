<?php namespace JacobFeeley\Minisite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJacobfeeleyMinisiteCourses2 extends Migration
{
    public function up()
    {
        Schema::table('jacobfeeley_minisite_courses', function($table)
        {
            $table->text('tag_line')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jacobfeeley_minisite_courses', function($table)
        {
            $table->string('tag_line', 191)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
