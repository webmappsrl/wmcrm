<?php

namespace Database\Seeders;

use App\Models\Epic;
use Illuminate\Database\Seeder;

class EpicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Epic::factory(20)->create();
    }
}