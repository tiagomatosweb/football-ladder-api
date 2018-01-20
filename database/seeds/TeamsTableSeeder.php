<?php

use App\Team;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::truncate();
        $now = date("Y-m-d H:i:s");
        DB::table('teams')->insert([
            ['name' => 'Sydney FC', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Newcastle Jets', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Melbourne Victory', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Melbourne City FC', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Adelaide United', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Western Sydney Wanderers FC', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Brisbane Roar FC', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Perth Glory', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Central Coast Mariners', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Wellington Phoenix', 'created_at' => $now, 'updated_at' => $now],
        ]);

        DB::table('competition_team')->insert([
            ['team_id' => 1, 'competition_id' => 1],
            ['team_id' => 2, 'competition_id' => 1],
            ['team_id' => 3, 'competition_id' => 1],
            ['team_id' => 4, 'competition_id' => 1],
            ['team_id' => 5, 'competition_id' => 1],
            ['team_id' => 6, 'competition_id' => 1],
            ['team_id' => 7, 'competition_id' => 1],
            ['team_id' => 8, 'competition_id' => 1],
            ['team_id' => 9, 'competition_id' => 1],
            ['team_id' => 10, 'competition_id' => 1],
            ['team_id' => 1, 'competition_id' => 2],
            ['team_id' => 2, 'competition_id' => 2],
            ['team_id' => 3, 'competition_id' => 2],
            ['team_id' => 4, 'competition_id' => 2],
            ['team_id' => 5, 'competition_id' => 2],
            ['team_id' => 6, 'competition_id' => 2],
            ['team_id' => 7, 'competition_id' => 2],
            ['team_id' => 8, 'competition_id' => 2],
            ['team_id' => 9, 'competition_id' => 2],
            ['team_id' => 10, 'competition_id' => 2],
        ]);
    }
}
