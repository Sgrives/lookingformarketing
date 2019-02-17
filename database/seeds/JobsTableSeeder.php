<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    public function run()
    {
        $jobs = factory(App\Job::class, 50)->create();
    }
}
