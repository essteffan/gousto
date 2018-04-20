<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Star;
use Illuminate\Http\Request;

class StarController extends Controller
{
    /**
     *
     * Add Recipe Star
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addStar(Request $request)
    {
        $this->validate($request, [
            'recipe_id' => 'required|integer',
            'star' => 'required|integer',
        ]);
        $recipe = Recipe::find($request->recipe_id);
        $rate = number_format($recipe->stars->sum("star") / $recipe->stars->count(), 2);
        $star = new Star();
        $star->recipe_id = $request->recipe_id;
        $star->star = $request->star;

        if($star->save()){
            return response()->json([
                'success' => 'Rate for recipe "'.$recipe->title.'" was successfully added. We now have '.$recipe->stars->count().' entries and rate is '.$rate
            ], 200);
        }

        return response()->json([
            'error' => 'There was an error on adding star for '.$recipe->title
        ], 404);
    }
}
