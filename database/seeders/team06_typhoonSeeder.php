<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\team06_typhoon;
use Illuminate\Support\Facades\DB;

class team06_typhoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team06_typhoons')->truncate();
        team06_typhoon::unguard();
        team06_typhoon::factory(10)->create();
        team06_typhoon::reguard();
    }
}
