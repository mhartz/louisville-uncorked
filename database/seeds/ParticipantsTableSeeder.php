<?php

use Illuminate\Database\Seeder;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $participants = [
          
          [
            'team_id' => '1',
            'first_name' => 'Second',
            'last_name' => 'Dude Test1',
            'email' => str_random(7).'1@gmail.com',
            'is_admin' => 0
          ],
          [
            'team_id' => '1',
            'first_name' => 'Not',
            'last_name' => 'Cool Test1',
            'email' => str_random(7).'1@gmail.com',
            'is_admin' => 0
          ],
          
          [
            'team_id' => '2',
            'first_name' => 'Second',
            'last_name' => 'Dude Test2',
            'email' => str_random(7).'2@gmail.com',
            'is_admin' => 0
          ],
          [
            'team_id' => '2',
            'first_name' => 'Not',
            'last_name' => 'Cool Test2',
            'email' => str_random(7).'2@gmail.com',
            'is_admin' => 0
          ],
          [
            'team_id' => '3',
            'first_name' => 'Second',
            'last_name' => 'Dude Test3',
            'email' => str_random(7).'3@gmail.com',
            'is_admin' => 0
          ],
          [
            'team_id' => '3',
            'first_name' => 'Not',
            'last_name' => 'Cool Test3',
            'email' => str_random(7).'3@gmail.com',
            'is_admin' => 0
          ],
        ];
        
        DB::table('participants')->insert($participants);
    }
}
