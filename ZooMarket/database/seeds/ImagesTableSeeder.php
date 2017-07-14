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
      $images = collect(['products\images\products\1.jpg', 'products\images\products\2.jpg', 'products\images\products\3.jpg', 'products\images\products\4.jpg', 'products\images\products\5.jpg']);

      $images->each(function ($value){
          factory(Image::Class)->create([
            'url' => $value
          ]);
      });
    }
}
