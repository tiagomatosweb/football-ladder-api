<?php

use App\Competition;
use Illuminate\Database\Seeder;

class CompetitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Competition::truncate();
        $now = date("Y-m-d H:i:s");
        DB::table('competitions')->insert([
            ['name' => 'Hyundai A-league', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'FFA CUP', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
