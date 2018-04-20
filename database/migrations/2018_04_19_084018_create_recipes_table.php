<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("box_type");
            $table->string("title");
            $table->string("slug")->unique();
            $table->string("short_title")->nullable();
            $table->text("marketing_description")->nullable();
            $table->integer("calories_kcal")->nullable();
            $table->integer("protein_grams")->nullable();
            $table->integer("fat_grams")->nullable();
            $table->integer("carbs_grams")->nullable();
            $table->string("bulletpoint1")->nullable();
            $table->string("bulletpoint2")->nullable();
            $table->string("bulletpoint3")->nullable();
            $table->enum("recipe_diet_type_id", ['meat', 'fish', 'vegetarian'])->default("meat");
            $table->string("season")->nullable();
            $table->string("base")->nullable();
            $table->enum("protein_source", ['beef', 'seafood', 'pork','chicken', 'cheese', 'eggs', 'fish'])->default("beef");
            $table->integer("preparation_time_minutes")->nullable();
            $table->integer("shelf_life_days")->nullable();
            $table->string("equipment_needed")->nullable();
            $table->string("origin_country")->nullable();
            $table->enum("recipe_cuisine", ['asian', 'italian', 'british', 'mediterranean', 'mexican'])->default("british");
            $table->string("in_your_box")->nullable();
            $table->integer("gousto_reference")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
