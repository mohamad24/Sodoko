<?php

use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      DB::table('series')->insert([
        'title' => 'elda7ee7',
        'description' => 'First Popular Science channel in the Arab World !',
        'airingtime'=> date("Y-m-d", strtotime("+1 month"))

      ]);

      DB::table('series')->insert([
        'title' => 'The simpsons',
        'description' => 'The Simpsons is an American animated sitcom created by Matt Groening for the Fox Broadcasting Company',
        'airingtime'=>  date("Y-m-d", strtotime("+9 month"))
      ]);

      DB::table('series')->insert([
        'title' => 'The Blacklist',
        'description' => 'The Blacklist is an American crime thriller television series that premiered on NBC',
        'airingtime'=> date("Y-m-d", strtotime("+2 month"))

      ]);


      DB::table('series')->insert([
        'title' => 'Supernatural',
        'description' => 'Two brothers follow their father\'s footsteps as hunters, fighting evil supernatural beings of many kinds, including monsters, demons and gods that roam the earth.',
        'airingtime'=> date("Y-m-d", strtotime("+7 month"))

      ]);

      DB::table('series')->insert([
        'title' => 'CSI Miami',
        'description' => 'CSI is a media franchise of American television programs created by Anthony E. Zuiker. The first three CSI series follow the work of forensic scientists ',
        'airingtime'=> date("Y-m-d", strtotime("+2 month"))

      ]);

      DB::table('series')->insert([
        'title' => 'Game of Thrones',
        'description' => 'Game of Thrones is an American fantasy drama television series created by David Benioff and D. B. Weiss for HBO. It is an adaptation of A Song of Ice and Fire...',
        'airingtime'=>  date("Y-m-d", strtotime("+4 month"))

      ]);

    }
}


