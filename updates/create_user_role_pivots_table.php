<?php namespace October\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateUserRolePivotsTable extends Migration
{

    public function up()
    {
        Schema::create('october_test_user_role_pivots', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('october_test_user_role_pivots');
    }

}