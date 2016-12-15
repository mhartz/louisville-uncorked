<?php

    use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipants2017Winter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants_2017_winter', function (Blueprint $table) {
            $table->increments('id')->unique(); //PK
            $table->integer('team_id'); //FK
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('is_admin')->default(0);
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
        Schema::drop('participants_2017_winter');
    }
}
