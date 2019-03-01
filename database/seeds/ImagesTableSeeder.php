<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();
        //Imagenes para producto 1
        Image::create([
          'id' => 1,
          'file' => '00880608879036-1l.jpg',
          'product_id' => 1
        ]);
        Image::create([
          'id' => 2,
          'file' => '00880608879036-2l.jpg',
          'product_id' => 1
        ]);
        Image::create([
          'id' => 3,
          'file' => '00880608879036-1l.jpg',
          'product_id' => 1
        ]);
        Image::create([
          'id' => 4,
          'file' => '00880608879036-3l.jpg',
          'product_id' => 1
        ]);
        //Imagenes para producto 2
        Image::create([
          'id' => 5,
          'file' => '30cocjk.jpg',
          'product_id' => 2
        ]);
        Image::create([
          'id' => 6,
          'file' => 'beats-by-dr-dre-mixr-on-ear-headphones-david-guetta-edition-white-main_2.jpg',
          'product_id' => 2
        ]);
        Image::create([
          'id' => 7,
          'file' => 'blackfriday-beatsmixr-white-headphones-david-guettainspired-e219447_107585.jpg',
          'product_id' => 2
        ]);
        Image::create([
          'id' => 8,
          'file' => 'ebdddd976fc4226f2b3f03bbd5f2a13db3ee1e25.jpg',
          'product_id' => 2
        ]);
        //Imagenes para producto 3
        Image::create([
          'id' => 9,
          'file' => 'bdps3100.jpg',
          'product_id' => 3
        ]);
        Image::create([
          'id' => 10,
          'file' => 'Remote-Control-for-Sony-Blu-Ray-DVD-Player-BDP-S3100-BDP-S3100-BF-BDP-S5100-BDP.jpg_640x640.jpg',
          'product_id' => 3
        ]);
        Image::create([
          'id' => 11,
          'file' => 'sony_bdps3100_bdp_s3100_blu_ray_disc_player_920348.jpg',
          'product_id' => 3
        ]);
        Image::create([
          'id' => 12,
          'file' => 'sony-bdp-s3100-region-free-blu-ray-dvd-player.jpg',
          'product_id' => 3
        ]);
        //Imagenes para producto 4
        Image::create([
          'id' => 13,
          'file' => '00088411627782-1l.jpg',
          'product_id' => 4
        ]);
        Image::create([
          'id' => 14,
          'file' => '00088411627782-2l.jpg',
          'product_id' => 4
        ]);
        Image::create([
          'id' => 15,
          'file' => '00088411627782-3l.jpg',
          'product_id' => 4
        ]);
        Image::create([
          'id' => 16,
          'file' => '00088411627782l.jpg',
          'product_id' => 4
        ]);
        //
        Image::create([
          'id' => 17,
          'file' => '00880608879048l.jpg',
          'product_id' => 5
        ]);
        Image::create([
          'id' => 18,
          'file' => '00880608879048-1l.jpg',
          'product_id' => 5
        ]);
        Image::create([
          'id' => 19,
          'file' => '00880608879048-2l.jpg',
          'product_id' => 5
        ]);
        Image::create([
          'id' => 20,
          'file' => '00880608879048-3l.jpg',
          'product_id' => 5
        ]);
        //
        Image::create([
          'id' => 21,
          'file' => '00929397000362l.jpg',
          'product_id' => 6
        ]);
        Image::create([
          'id' => 22,
          'file' => '00929397000362-1l.jpg',
          'product_id' => 6
        ]);
        Image::create([
          'id' => 23,
          'file' => '00929397000362-2l.jpg',
          'product_id' => 6
        ]);
        Image::create([
          'id' => 24,
          'file' => '00929397000362-3l.jpg',
          'product_id' => 6
        ]);
        //
        Image::create([
          'id' => 25,
          'file' => '00694214743875l.jpg',
          'product_id' => 7
        ]);
        Image::create([
          'id' => 26,
          'file' => '00694214743875-1l.jpg',
          'product_id' => 7
        ]);
        Image::create([
          'id' => 27,
          'file' => '00694214743875-2l.jpg',
          'product_id' => 7
        ]);
        Image::create([
          'id' => 28,
          'file' => '00694214743875-3l.jpg',
          'product_id' => 7
        ]);
        //
        Image::create([
          'id' => 29,
          'file' => '00085369909412l.jpg',
          'product_id' => 8
        ]);
        Image::create([
          'id' => 30,
          'file' => '00085369909412-1l.jpg',
          'product_id' => 8
        ]);
        Image::create([
          'id' => 31,
          'file' => '00085369909412-2l.jpg',
          'product_id' => 8
        ]);
        //
        Image::create([
          'id' => 32,
          'file' => '00880608872190l.jpg',
          'product_id' => 9
        ]);
        //
        Image::create([
          'id' => 33,
          'file' => '00694768153459l.jpg',
          'product_id' => 10
        ]);
        Image::create([
          'id' => 34,
          'file' => '00694768153459-1l.jpg',
          'product_id' => 10
        ]);
        Image::create([
          'id' => 35,
          'file' => '00694768153459-2l.jpg',
          'product_id' => 10
        ]);
        //
        Image::create([
          'id' => 36,
          'file' => '00751234567335l.jpg',
          'product_id' => 11
        ]);
        Image::create([
          'id' => 37,
          'file' => '00751234567335-1l.jpg',
          'product_id' => 11
        ]);
        Image::create([
          'id' => 38,
          'file' => '00751234567335-2l.jpg',
          'product_id' => 11
        ]);
        //
        Image::create([
          'id' => 39,
          'file' => 'B1400000112198l.jpg',
          'product_id' => 12
        ]);
        //
        Image::create([
          'id' => 40,
          'file' => '00840790110677l.jpg',
          'product_id' => 13
        ]);
        Image::create([
          'id' => 41,
          'file' => '00840790110677-1l.jpg',
          'product_id' => 13
        ]);
        Image::create([
          'id' => 42,
          'file' => '00840790110677-2l.jpg',
          'product_id' => 13
        ]);
        Image::create([
          'id' => 43,
          'file' => '00840790110677-3l.jpg',
          'product_id' => 13
        ]);
    }
}
