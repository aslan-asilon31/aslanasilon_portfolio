<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'id_gallery'	=> 1,
            'name'	=> 'product 1',
            'description'	=> 'description 1',
            'tech_used'	=> 'tech_used 1',
            'project_url'	=> 'project_url 1',
            'git_repo'	=> 'git_repo 1',
            'responsibility'	=> 'responsibility 1',
            'challenge'	=> 'challenge 1',
            'accomplishment'	=> 'accomplishment 1',
            'lesson_learned'	=> 'lesson_learned 1',
        ]);

        Product::create([
            'id_gallery'	=> 2,
            'name'	=> 'product 2',
            'description'	=> 'description 2',
            'tech_used'	=> 'tech_used 2',
            'project_url'	=> 'project_url 2',
            'git_repo'	=> 'git_repo 2',
            'responsibility'	=> 'responsibility 2',
            'challenge'	=> 'challenge 2',
            'accomplishment'	=> 'accomplishment 2',
            'lesson_learned'	=> 'lesson_learned 2',
        ]);
    }
}
