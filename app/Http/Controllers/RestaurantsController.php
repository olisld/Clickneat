<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurants;

class RestaurantsController extends Controller
{
    public function index()
    {
        // return 'welcome';
        return view('restaurants.index',[
            'restaurants' => restaurants::all()
        ]);
    }

    public function create(){
        return view('restaurants.create');
    }

    public function store(request $request){
        restaurants::create($request->all());
        return redirect()->route('restaurants.index');
    }
    public function show($id){
        return view('restaurants.show',[
            'restaurants' => restaurants::findOrFail($id)
        ]);
    }
    public function edit($id){
        return view('restaurants.edit',[
            'restaurants' => restaurants::findOrFail($id)

        ]);
    }

    public function update(Request $request, $id){

        $restaurant = restaurants::findOrFail($id);

        $restaurant->name = $request->get('name');
        $restaurant->save();

        return redirect()->route('restaurants.index');
    }


    public function destroy(Request $request, $id){

        if($request->get('id') == $id) {
            restaurants::destroy($id);
        }
        return redirect()->route('restaurants.index');
    }
}
