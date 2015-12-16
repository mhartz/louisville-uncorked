<?php

use Illuminate\Database\Seeder;

class MailingListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $emails = [
          [
            'email' => str_random(7).'1@gmail.com'
          ],
          [
            'email' => str_random(7).'1@gmail.com'
          ],
          [
            'email' => str_random(7).'2@gmail.com'
          ],
          [
            'email' => str_random(7).'2@gmail.com'
          ],
          [
            'email' => str_random(7).'3@gmail.com'
          ],
          [
            'email' => str_random(7).'3@gmail.com'
          ]
        ];
        
        DB::table('mailing_list')->insert($emails);
    }
}
