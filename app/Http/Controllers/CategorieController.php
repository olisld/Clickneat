<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\restaurants;

class CategorieController extends Controller
{
    public function index()
    {
        return view('categories.index',[
            'categories' => categories::all()
        ]);
    }

    public function create(){
        return view('categories.create',[
            'restaurants'=>restaurants::all()
        ]);
    }

    public function store(request $request){
        $categories=new categories();

        $categories->name = $request->get('name');
        $categories->restaurant_id=$request->get('restaurant_id');
        $categories->save();
        // categories::create($request->all());
        return redirect()->route('categories.index');
    }

    public function show($id){
        return view('categories.show',[
            'categories' => categories::findOrFail($id),

        ]);
    }

    public function edit($id){
        return view('categories.edit',[
            'categories' => categories::findOrFail($id),
            'restaurants' => restaurants::all()
        ]);
    }

    public function update(Request $request, $id){

        $categories = categories::findOrFail($id);

        $categories->name = $request->get('name');
        $categories->save();

        return redirect()->route('categories.index');
    }


    public function destroy(Request $request, $id){

        if($request->get('id') == $id) {
            categories::destroy($id);
        }
        return redirect()->route('categories.index');
    }
}
