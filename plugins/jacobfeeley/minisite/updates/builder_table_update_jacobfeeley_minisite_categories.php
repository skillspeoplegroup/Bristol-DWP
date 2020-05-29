<?php namespace JacobFeeley\Minisite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJacobfeeleyMinisiteCategories extends Migration
{
    public function up()
    {
        Schema::table('jacobfeeley_minisite_categories', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('jacobfeeley_minisite_categories', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
