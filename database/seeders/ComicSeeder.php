<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataComics = config('comics');

        foreach( $dataComics as $elem){
            $numberComic = new Comic();
            $numberComic->title = $elem['title'];
            $numberComic->description = $elem['description'];
            $numberComic->thumb = $elem['thumb'];
            $numberComic->price = $elem['price'];
            $numberComic->series = $elem['series'];
            $numberComic->sale_date = $elem['sale_date'];
            $numberComic->type = $elem['type'];
            $numberComic->save();
        }
    }
}
