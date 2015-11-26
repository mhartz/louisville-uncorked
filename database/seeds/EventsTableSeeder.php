<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('events')->insert([
        'event_date' => '2015-10-22 19:00:00',
        'event_name' => 'Fall 2015 Tasting',
        'event_location' => 'The Foundry at Glassworks',
        'event_address' => '815 W Market St, Louisville, KY 40202'
      ]);
    }
}
