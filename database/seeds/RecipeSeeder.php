<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->delete();

        Excel::load(database_path("recipe-data.csv"), function ($reader) {
            foreach ($reader->toArray() as $key => $row) {
                $data['id'] = $row['id'];
                $data['box_type'] = $row['box_type'];
                $data['title'] = $row['title'];
                $data['slug'] = $row['slug'];
                $data['short_title'] = $row['short_title'];
                $data['marketing_description'] = $row['marketing_description'];
                $data['calories_kcal'] = $row['calories_kcal'];
                $data['protein_grams'] = $row['protein_grams'];
                $data['fat_grams'] = $row['fat_grams'];
                $data['carbs_grams'] = $row['carbs_grams'];
                $data['bulletpoint1'] = $row['bulletpoint1'];
                $data['bulletpoint2'] = $row['bulletpoint2'];
                $data['bulletpoint3'] = $row['bulletpoint3'];
                $data['recipe_diet_type_id'] = $row['recipe_diet_type_id'];
                $data['season'] = $row['season'];
                $data['base'] = $row['base'];
                $data['protein_source'] = $row['protein_source'];
                $data['preparation_time_minutes'] = $row['preparation_time_minutes'];
                $data['shelf_life_days'] = $row['shelf_life_days'];
                $data['equipment_needed'] = $row['equipment_needed'];
                $data['origin_country'] = $row['origin_country'];
                $data['recipe_cuisine'] = $row['recipe_cuisine'];
                $data['in_your_box'] = $row['in_your_box'];
                $data['gousto_reference'] = $row['gousto_reference'];
                $data['created_at'] = Carbon::createFromFormat('d/m/Y H:i:s', $row['updated_at']);
                $data['updated_at'] = Carbon::createFromFormat('d/m/Y H:i:s', $row['updated_at']);

                if(!empty($data)) {
                    DB::table('recipes')->insert($data);
                }
            }
        });

    }
}
