<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CuisineFormRequest;
use App\Models\Cuisine;

class CuisineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuisines = Cuisine::all();
        return view('cuisine.cuisines', compact('cuisines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuisine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CuisineFormRequest $request)
    {
        $data = $request->validated();

        $cuisine = new Cuisine;
        $cuisine->name = $data['name'];
        $cuisine->slug = $data['slug'];
        $cuisine->description = $data['description'];
        $cuisine->save();

        return redirect('admin/cuisines')->with('message', 'Cuisine is added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuisine  $cuisine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuisine = Cuisine::find($id);
        return view('cuisine.edit', compact('cuisine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuisine  $cuisine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);

        $cuisine = Cuisine::find($id);
        $cuisine->name = $request['name'];
        $cuisine->slug = $request['slug'];
        $cuisine->description = $request['description'];
        $cuisine->update();

        return redirect('admin/cuisines')->with('message', 'Cuisine is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuisine  $cuisine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuisine = Cuisine::find($id);
        if ($cuisine) {
            $cuisine->delete();
            return redirect('admin/cuisines')->with('message', 'Cuisine is deleted successfully');
        } else {
            return redirect('admin/cuisines')->with('message', 'No cuisine found');
        }
    }
}
