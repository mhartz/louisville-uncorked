<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Might need a foreign key to add addtional party members
         * --Maybe needs to be by party instead of a single RSVP connected to 
         * --another table via relational tables. (maybe ask Bekah or another "business" persons)
         */
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id')->unique(); //PK
            $table->integer('event_id'); //FK
            $table->string('team_name')->unique();
            $table->string('registrant_first_name');
            $table->string('registrant_last_name');
            $table->string('registrant_email')->unique();
            // $table->string('Registrant_Password');   FOR PASSWORD
            // $table->rememberToken();                 FOR PASSWORD
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teams');
    }
}
