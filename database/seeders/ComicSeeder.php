<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Http\Models\Comic;

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

        foreach( $datacomics as $elem){
            $numberComic = new Comic();
            $numberComic->title = $elem['title'];
            $numberComic->description = $elem['description'];
            $numberComic->imagine = $elem['thumb'];
            $numberComic->price = $elem['price'];
            $numberComic->type = $elem['series'];
            $numberComic->nameseries = $elem['sale_date'];
            $numberComic->kind = $elem['type'];
            $numberComic->save();
        }
    }
}
