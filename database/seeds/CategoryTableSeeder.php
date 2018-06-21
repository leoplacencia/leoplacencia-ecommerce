<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Category;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Array de creación
		$data = array(
			[
				'name' => 'Super heroes', 
				'slug' => 'super-heroes', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#440022'
			],
			[
				'name' => 'Geek', 
				'slug' => 'geek', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#445500'
			]
		);
		// Creación en la db
		Category::insert($data);

	}
}