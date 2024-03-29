<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(EventsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(ParticipantsTableSeeder::class);
        $this->call(MailingListTableSeeder::class);

        Model::reguard();
    }
}
