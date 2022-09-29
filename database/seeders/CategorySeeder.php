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
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'novobudovy',
            ],
            [
                'title' => 'Квартири',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'kvartyry',
            ],
            [
                'title' => 'Дома та вілли',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'doma-i-villy',

            ],
            [
                'title' => 'Земельні ділянки',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'zemelni-dilianky',

            ],
            [
                'title' => 'Оренда житла',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'orenda-zhytla',


            ],
            [
                'title' => 'Придбання нерухомості',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'prydbannia-neruhomosti',

            ],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

    }

}
