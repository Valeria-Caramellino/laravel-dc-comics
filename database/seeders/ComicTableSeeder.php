<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics=config("store");
        foreach($comics as $item){
            $newProduct= new Comic();
            $newProduct->title = $item["title"];
            $newProduct->description = $item["description"];
            $newProduct->thumb = $item["thumb"];
            $newProduct->price = $item["price"];
            $newProduct->series = $item["series"];
            $newProduct->sale_date = $item["sale_date"];
            $newProduct->type = $item["type"];
            $newProduct->artists = $item["artists"];
            $newProduct->writers = $item["writers"];
            $newProduct->save();
        }
    }
}
