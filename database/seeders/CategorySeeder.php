<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [
                'title' => 'Новобудови',
                'slug' => 'novobudovy',
            ],
            [
                'title' => 'Квартири',
                'slug' => 'kvartyry',
            ],
            [
                'title' => 'Дома та вілли',
                'slug' => 'doma-i-villy',

            ],
            [
                'title' => 'Земельні ділянки',
                'slug' => 'zemelni-dilianky',

            ],
            [
                'title' => 'Оренда житла',
                'slug' => 'orenda-zhytla',


            ],
            [
                'title' => 'Придбання нерухомості',
                'slug' => 'sdfsdfsdasdfewrtertf',

            ],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

    }

}
