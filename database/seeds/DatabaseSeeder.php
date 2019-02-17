<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CompaniesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DesksTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        // $this->call(GuidesTableSeeder::class);
        $this->call(JobsTableSeeder::class);
    }
}
