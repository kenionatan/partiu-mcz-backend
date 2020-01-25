<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RestaurantCategory;

class RestaurantCategoryController extends Controller
{
    public function index(){
        return RestaurantCategory::all();
    }

    public function show($id){
        return RestaurantCategory::find($id);
    }

    public function store(Request $request){
        return RestaurantCategory::create($request->all());
    }

    public function update(Request $request, $id){
        $restaurantCategory = Restaurant::findOrFail($id);
        $restaurantCategory->update($request->all());

        return $restaurant;
    }

    public function delete(Request $request, $id){
        $restaurantCategory = Restaurant::findOrFail($id);
        $restaurantCategory->delete();

        return 204;
    }
}
