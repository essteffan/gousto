<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Get Recipe by ID
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRecipe($id, Request $request)
    {
        if(!$id){
            return response()->json([
                'error' => 'Resource not found'
            ], 404);
        }

        $recipe = Recipe::find($id);
        return $recipe;
    }

    /**
     * Get Recipe by Cuisine
     *
     * @param $cuisine
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRecipesByCuisine($cuisine, Request $request)
    {
        if(!$cuisine){
            return response()->json([
                'error' => 'Resource not found'
            ], 404);
        }

        $recipes = Recipe::where("recipe_cuisine", $cuisine)->paginate(10);
        return $recipes;
    }


    /**
     * Update Recipe
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateRecipe($id, Request $request)
    {
        if(!$id){
            return response()->json([
                'error' => 'Resource not found'
            ], 404);
        }

        $this->validate($request, [
            'title' => 'required|min:3',
            'recipe_cuisine' => 'required',
        ]);

        $recipe = Recipe::find($id);

        foreach($request->all() as $key=>$value){
            $recipe->{$key} = $value;
        }

        if(isset($request->title)){
            $recipe->slug = str_slug($request->title);
        }

        if($recipe->save()){
            return response()->json([
                'success' => 'Recipe '.$recipe->title.' was successfully updated'
            ], 200);
        }

        return response()->json([
            'error' => 'There was an error on updating '.$recipe->title
        ], 404);
    }


    /**
     * Add Recipe
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addRecipe(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'box_type' => 'required',
            'marketing_description' => 'required',
            'calories_kcal' => 'required',
            'protein_grams' => 'required',
            'fat_grams' => 'required',
            'carbs_grams' => 'required',
            'recipe_diet_type_id' => 'required',
            'season' => 'required',
            'base' => 'required',
            'protein_source' => 'required',
            'preparation_time_minutes' => 'required',
            'shelf_life_days' => 'required',
            'equipment_needed' => 'required',
            'origin_country' => 'required',
            'recipe_cuisine' => 'required',
            'gousto_reference' => 'required',
        ]);

        $recipe = new Recipe();

        foreach($request->all() as $key=>$value){
            $recipe->{$key} = $value;
        }

        $recipe->slug = str_slug($request->title);

        if($recipe->save()){
            return response()->json([
                'success' => 'Recipe '.$recipe->title.' was successfully added'
            ], 200);
        }

        return response()->json([
            'error' => 'There was an error on updating '.$recipe->title
        ], 404);
    }
}
