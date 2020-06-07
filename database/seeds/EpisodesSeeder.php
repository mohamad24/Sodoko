<?php

use Illuminate\Database\Seeder;

class EpisodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('episodes')->insert([
        'title' => 'القولون',
        'series_id'=> 1,
        'description' => 'دليلك عشان تفهم قولونك!',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/maxresdefault.jpg',
        'url'=>'video/v1.mp4'

      ]);
      DB::table('episodes')->insert([
        'title' => 'كلما يقل يكتر',
        'series_id'=> 1,
        'description' => 'كلما يقل يكتر',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'',
        'thumbnail'=>'images/lessinmore.jpg',
        'url'=>'video/v2.mp4'
      ]);
      DB::table('episodes')->insert([
        'title' => 'العلاج بالصلصة',
        'series_id'=> 1,
        'description' => 'العلاج بالصلصة',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'',
        'thumbnail'=>'images/salsa.jpg',
        'url'=>'video/v3.mp4'

      ]);


      DB::table('episodes')->insert([
        'title' => 'ssssssssss',
        'series_id'=> 1,
        'description' => 'كلما يقل يكتر',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'',
        'thumbnail'=>'images/lessinmore.jpg',
        'url'=>'video/v4.mp4'
      ]);
      DB::table('episodes')->insert([
        'title' => ' بالصلصة العلاج ',
        'series_id'=> 1,
        'description' => ' بالصلصة العلاج ',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'',
        'thumbnail'=>'images/salsa.jpg',
        'url'=>'video/v5.mp4'

      ]);

      DB::table('episodes')->insert([
        'title' => ' بالصلصة العلاج ',
        'series_id'=> 1,
        'description' => ' بالصلصة العلاج ',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'',
        'thumbnail'=>'images/salsa.jpg',
        'url'=>'video/v6.mp4'

      ]);



      DB::table('episodes')->insert([
        'title' => 'Go Big Or Go Homer',
        'series_id'=> 2,
        'description' => 'Go Big Or Go Homer Description',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/gobig.jpeg',
        'url'=>'video/v4.mp4'

      ]);
      DB::table('episodes')->insert([
        'title' => 'Sunday, Cruddy Sunday',
        'series_id'=> 2,
        'description' => 'Sunday, Cruddy Sunday Description',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/sim2.jpeg',
        'url'=>'video/v5.mp4'
      ]);
      DB::table('episodes')->insert([
        'title' => 'The Old Man and the C Student',
        'series_id'=> 2,
        'description' => 'The Old Man and the C Student Description',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/the-simpsons.png',
        'url'=>'video/v6.mp4'
      ]);


      DB::table('episodes')->insert([
        'title' => 'The Truth',
        'series_id'=> 3,
        'description' => 'The Blacklist || The Truth',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/black1.jpg',
        'url'=>'video/v7.mp4'

      ]);
      DB::table('episodes')->insert([
        'title' => 'Katarina Rostova',
        'series_id'=> 3,
        'description' => 'The Blacklist | Katarina Rostova - BETRAYAL [S7]',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/black2.jpg',
        'url'=>'video/v8.mp4'
      ]);
      DB::table('episodes')->insert([
        'title' => 'Reddington & Katarina',
        'series_id'=> 3,
        'description' => 'The Blacklist || Reddington & Katarina : This Is War',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/black3.jpeg',
        'url'=>'video/v9.mp4'

      ]);




      DB::table('episodes')->insert([
        'title' => 'On My Own',
        'series_id'=> 4,
        'description' => 'On My Own - [Mark of Cain]',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/super1.jpg',
        'url'=>'video/v10.mp4'

      ]);
      DB::table('episodes')->insert([
        'title' => 'Eye of the tiger',
        'series_id'=> 4,
        'description' => 'Supernatural Dean singing [Eye of the tiger]',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/super2.jpeg',
        'url'=>'video/v11.mp4'
      ]);
      DB::table('episodes')->insert([
        'title' => 'Supernatural Top 8 Dean Moments',
        'series_id'=> 4,
        'description' => 'Supernatural Top 8 Description',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/super3.jpeg',
        'url'=>'video/v1.mp4'

      ]);




      DB::table('episodes')->insert([
        'title' => 'THE LISTENER',
        'series_id'=> 5,
        'description' => 'THE LISTENER  "The Bank Job" ',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/csi1.jpeg',
        'url'=>'video/v3.mp4'

      ]);
      DB::table('episodes')->insert([
        'title' => 'Amy Acker',
        'series_id'=> 5,
        'description' => 'Amy Acker - CSI: Crime Scene Investigation 11 11 - Man Up',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/csi2.jpeg',
        'url'=>'video/v4.mp4'
      ]);
      DB::table('episodes')->insert([
        'title' => 'The Two Mrs',
        'series_id'=> 5,
        'description' => 'CSI: - The Two Mrs. Grissoms',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/csi3.jpeg',
        'url'=>'video/v5.mp4'
      ]);





      DB::table('episodes')->insert([
        'title' => 'Trailer one',
        'series_id'=> 6,
        'description' => 'Game of Thrones | Season 8 | Official Trailer (HBO)',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/game1.jpeg',
        'url'=>'video/v6.mp4'

      ]);
      DB::table('episodes')->insert([
        'title' => 'Trailer two',
        'series_id'=> 6,
        'description' => 'Game of Thrones: Season 1 Trailer',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/game2.jpeg',
        'url'=>'video/v17.mp4'
      ]);
      DB::table('episodes')->insert([
        'title' => 'All Dracarys Moments',
        'series_id'=> 6,
        'description' => 'All Dracarys Moments || GoT',
        'airingtime'=> date("Y-m-d", strtotime("+1 month")),
        'duration'=>'1',
        'thumbnail'=>'images/game3.jpeg',
        'url'=>'video/v8.mp4'

      ]);




    }
}


