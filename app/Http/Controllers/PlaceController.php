<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlaceController extends Controller
{
    public function index(){
        return Place::all();
    }

    public function show($id){
        return Place::find($id);
    }

    public function store(Request $request){
        return Place::create($request->all());
    }

    public function update(Request $request, $id){
        $place = Place::findOrFail($id);
        $place->update($request->all());

        return $place;
    }

    public function delete(Request $request, $id){
        $place = Place::findOrFail($id);
        $place->delete();

        return 204;
    }

}
