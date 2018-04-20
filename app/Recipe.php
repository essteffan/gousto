<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Star;

class Recipe extends Model
{
    protected $fillable = [
        "box_type",
        "title",
        "slug",
        "short_title",
        "marketing_description",
        "calories_kcal",
        "protein_grams",
        "fat_grams",
        "carbs_grams",
        "bulletpoint1",
        "bulletpoint2",
        "bulletpoint3",
        "recipe_diet_type_id",
        "season",
        "base",
        "protein_source",
        "preparation_time_minutes",
        "shelf_life_days",
        "equipment_needed",
        "origin_country",
        "recipe_cuisine",
        "in_your_box",
        "gousto_reference"
    ];


    public function stars()
    {
        return $this->hasMany(Star::class);
    }


}
