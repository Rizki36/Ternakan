<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        return view("admin.animals.index")->with('animals',$animals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.animals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "id"=>"required|unique:animals",
            "name"=>"required",
            "gender" => "required|in:m,f",
            "birthday" => "required|date",
            "child_num" => "required|numeric"
        ]);
        $data['id'] = $request->input("id");
        $data['name'] = $request->input("name");
        $data['gender'] = $request->input("gender");
        $data['birthday'] = $request->input("birthday");
        $data['is_life'] = true;
        $data['child_num'] = $request->input("child_num");
        $animal = new Animal($data);
        $animal->save();
        return redirect()->route('animals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::find($id);
        return view('admin.animals.edit')
                ->with('animal',$animal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "id"=>"required|unique:animals,id,".$id,
            "name"=>"required",
            "gender" => "required|in:m,f",
            "birthday" => "required|date",
            "child_num" => "required|numeric"
        ]);
        $animal = Animal::find($id);
        $animal['id'] = $request->input("id");
        $animal['name'] = $request->input("name");
        $animal['gender'] = $request->input("gender");
        $animal['birthday'] = $request->input("birthday");
        $animal['is_life'] = true;
        $animal['child_num'] = $request->input("child_num");
        $animal->save();
        return redirect()->route('animals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::destroy($id);
        return redirect()->route("animals.index");
    }

    public function parent($id)
    {
        # code...
    }
}
