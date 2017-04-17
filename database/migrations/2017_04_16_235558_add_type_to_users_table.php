<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class AddTypeToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
           $table->tinyInteger('type')->default(User::TYPE_NORMAL)->unsigned()->after('email');
        });
    }

    public function down()
    {
        $table->dropColumn('type');
    }
}
