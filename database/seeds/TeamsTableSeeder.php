<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email1 = str_random(8).'@gmail.com';
        $first_name1 = 'Test';
        $last_name1 = 'Reg1';
        
        $email2 = str_random(8).'@gmail.com';
        $first_name2 = 'Test';
        $last_name2 = 'Reg2';


        $email3 = str_random(8).'@gmail.com';
        $first_name3 = 'Test';
        $last_name3 = 'Reg3';

        /*
          Team 1
         */
        DB::table('teams')->insert([
          'event_id' => '1',
          'team_name' => 'Test Team 1',
          'registrant_first_name' => $first_name1,
          'registrant_last_name' => $last_name1,
          'registrant_email' => $email1
        ]);
        
        DB::table('participants')->insert([
          'team_id' => '1',
          'first_name' => $first_name1,
          'last_name' => $last_name1,
          'email' => $email1,
          'is_admin' => 1
        ]);
        
        /*
          Team 2
         */
        DB::table('teams')->insert([
          'event_id' => '1',
          'team_name' => 'Test Team 2',
          'registrant_first_name' => $first_name2,
          'registrant_last_name' => $last_name2,
          'registrant_email' => $email2
        ]);
        
        DB::table('participants')->insert([
          'team_id' => '2',
          'first_name' => $first_name2,
          'last_name' => $last_name2,
          'email' => $email2,
          'is_admin' => 1
        ]);
        
        /*
          Team 3
         */
        DB::table('teams')->insert([
          'event_id' => '1',
          'team_name' => 'Test Team 3',
          'registrant_first_name' => $first_name3,
          'registrant_last_name' => $last_name3,
          'registrant_email' => $email3
        ]);
        
        DB::table('participants')->insert([
          'team_id' => '3',
          'first_name' => $first_name3,
          'last_name' => $last_name3,
          'email' => $email3,
          'is_admin' => 1
        ]);
    }
}
