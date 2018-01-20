<?php

use App\Match;
use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Match::truncate();

        $now = date("Y-m-d H:i:s");
        DB::table('matches')->insert([
            ['competition_id' => 1, 'team_a_id' => 6, 'team_b_id' => 8, 'score_team_a' => 2, 'score_team_b' => 1],
            ['competition_id' => 1, 'team_a_id' => 10, 'team_b_id' => 5, 'score_team_a' => 1, 'score_team_b' => 1],
            ['competition_id' => 1, 'team_a_id' => 3, 'team_b_id' => 1, 'score_team_a' => 0, 'score_team_b' => 1],
            ['competition_id' => 1, 'team_a_id' => 9, 'team_b_id' => 2, 'score_team_a' => 1, 'score_team_b' => 5],
            ['competition_id' => 1, 'team_a_id' => 4, 'team_b_id' => 7, 'score_team_a' => 2, 'score_team_b' => 0],

            ['competition_id' => 1, 'team_a_id' => 1, 'team_b_id' => 10, 'score_team_a' => 3, 'score_team_b' => 2],
            ['competition_id' => 1, 'team_a_id' => 2, 'team_b_id' => 8, 'score_team_a' => 2, 'score_team_b' => 2],
            ['competition_id' => 1, 'team_a_id' => 3, 'team_b_id' => 4, 'score_team_a' => 1, 'score_team_b' => 2],
            ['competition_id' => 1, 'team_a_id' => 6, 'team_b_id' => 9, 'score_team_a' => 2, 'score_team_b' => 2],
            ['competition_id' => 1, 'team_a_id' => 7, 'team_b_id' => 5, 'score_team_a' => 1, 'score_team_b' => 2],

            ['competition_id' => 1, 'team_a_id' => 8, 'team_b_id' => 9, 'score_team_a' => 2, 'score_team_b' => 1],
            ['competition_id' => 1, 'team_a_id' => 7, 'team_b_id' => 2, 'score_team_a' => 1, 'score_team_b' => 2],
            ['competition_id' => 1, 'team_a_id' => 1, 'team_b_id' => 6, 'score_team_a' => 2, 'score_team_b' => 2],
            ['competition_id' => 1, 'team_a_id' => 4, 'team_b_id' => 10, 'score_team_a' => 1, 'score_team_b' => 0],
            ['competition_id' => 1, 'team_a_id' => 5, 'team_b_id' => 3, 'score_team_a' => 2, 'score_team_b' => 2],






            ['competition_id' => 2, 'team_a_id' => 6, 'team_b_id' => 8, 'score_team_a' => 2, 'score_team_b' => 2],
            ['competition_id' => 2, 'team_a_id' => 10, 'team_b_id' => 5, 'score_team_a' => 1, 'score_team_b' => 3],
            ['competition_id' => 2, 'team_a_id' => 3, 'team_b_id' => 1, 'score_team_a' => 0, 'score_team_b' => 4],
            ['competition_id' => 2, 'team_a_id' => 9, 'team_b_id' => 2, 'score_team_a' => 2, 'score_team_b' => 5],
            ['competition_id' => 2, 'team_a_id' => 4, 'team_b_id' => 7, 'score_team_a' => 3, 'score_team_b' => 3],

            ['competition_id' => 2, 'team_a_id' => 1, 'team_b_id' => 10, 'score_team_a' => 3, 'score_team_b' => 4],
            ['competition_id' => 2, 'team_a_id' => 2, 'team_b_id' => 8, 'score_team_a' => 1, 'score_team_b' => 1],
            ['competition_id' => 2, 'team_a_id' => 3, 'team_b_id' => 4, 'score_team_a' => 1, 'score_team_b' => 0],
            ['competition_id' => 2, 'team_a_id' => 6, 'team_b_id' => 9, 'score_team_a' => 1, 'score_team_b' => 3],
            ['competition_id' => 2, 'team_a_id' => 7, 'team_b_id' => 5, 'score_team_a' => 2, 'score_team_b' => 2],

            ['competition_id' => 2, 'team_a_id' => 8, 'team_b_id' => 9, 'score_team_a' => 3, 'score_team_b' => 3],
            ['competition_id' => 2, 'team_a_id' => 7, 'team_b_id' => 2, 'score_team_a' => 1, 'score_team_b' => 2],
            ['competition_id' => 2, 'team_a_id' => 1, 'team_b_id' => 6, 'score_team_a' => 1, 'score_team_b' => 1],
            ['competition_id' => 2, 'team_a_id' => 4, 'team_b_id' => 10, 'score_team_a' => 4, 'score_team_b' => 0],
            ['competition_id' => 2, 'team_a_id' => 5, 'team_b_id' => 3, 'score_team_a' => 2, 'score_team_b' => 2],
        ]);
    }
}
