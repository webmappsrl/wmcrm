<?php

namespace Database\Seeders;

use App\Models\Milestone;
use Illuminate\Database\Seeder;

class MilestoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Milestone::factory(100)->create();
    }
}
