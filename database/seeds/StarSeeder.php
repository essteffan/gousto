<?php

use Illuminate\Database\Seeder;

class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stars')->delete();

        DB::table('stars')->insert([
            [
                'id'          => 1,
                'star'        => "5",
                'recipe_id'   => "1",
                'created_at'  => \Carbon\Carbon::now(),
            ],
            [
                'id'          => 2,
                'star'        => "4",
                'recipe_id'   => "1",
                'created_at'  => \Carbon\Carbon::now(),
            ],
            [
                'id'          => 3,
                'star'        => "3",
                'recipe_id'   => "1",
                'created_at'  => \Carbon\Carbon::now(),
            ]
        ]);
    }
}
