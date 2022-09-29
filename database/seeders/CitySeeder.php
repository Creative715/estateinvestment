<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'title' => 'Варшава',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'warshawa',
            ],
            [
                'title' => 'Краків',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'krakiv',
            ],
            [
                'title' => 'Вроцлав',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'vrotslav',

            ],
            [
                'title' => 'Познань',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'poznan',

            ],
            [
                'title' => 'Гданьськ',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'gdansk',


            ],
            [
                'title' => 'Щецін',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'shchetsin',

            ],
            [
                'title' => 'Люблін',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'lublin',

            ],
            [
                'title' => 'Катовіце',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'katovitse',

            ],
            [
                'title' => 'Бялосток',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'bialostok',

            ],
            [
                'title' => 'Ченстохова',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'chenstohova',

            ],
            [
                'title' => 'Сосновець',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'chenstohova',

            ],
            [
                'title' => 'Глівіце',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'chenstohova',

            ],
            [
                'title' => 'Радом',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'chenstohova',

            ],
            [
                'title' => 'Кельце',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'chenstohova',

            ],

        ];

        foreach ($cities as $city) {
            City::create($city);
        }

    }
}
