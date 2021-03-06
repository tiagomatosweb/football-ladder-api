<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
         $this->call([
             CompetitionsTableSeeder::class,
             TeamsTableSeeder::class,
             MatchesTableSeeder::class,
         ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
