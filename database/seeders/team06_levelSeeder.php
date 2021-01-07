<?php

namespace Database\Seeders;

use App\Models\team06_level;
use Illuminate\Database\Seeder;
use App\Models\level;
use Illuminate\Support\Facades\DB;
class team06_levelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team06_levels')->truncate();
        team06_level::unguard();
        team06_level::factory(10)->create();
        team06_level::reguard();
    }
}
