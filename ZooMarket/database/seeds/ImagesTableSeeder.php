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
      $images = collect(['/images/products/1.jpg', '/images/products/2.jpg', '/images/products/3.jpg', '/images/products/4.jpg', '/images/products/5.jpg']);

      $images->each(function ($value){
          factory(Image::Class)->create([
            'source' => $value
          ]);
      });
    }
}
