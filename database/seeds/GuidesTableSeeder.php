<?php

use Illuminate\Database\Seeder;

class GuidesTableSeeder extends Seeder
{
    public function run()
    {
		$guide = factory(App\Guide::class, 50)->create();
    }
}
