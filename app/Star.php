<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recipe;

class Star extends Model
{
    protected $fillable = ['star', 'recipe_id'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
