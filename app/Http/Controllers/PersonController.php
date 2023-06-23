<?php

namespace App\Http\Controllers;
use \App\Models\Person;
use \App\Models\Todo;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::all();

        return view('person.index', [
            'persons' => $persons,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("person.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person = new Person();

        $person->name = $request->name;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->biodata = $request->biodata;
        

        $person->save();

        return redirect('/persons');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $person = Person::find($id);
        return view('person.show', [
            'person' => $person,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $person = Person::find($id);
        return view('person.edit', [
            'person' => $person,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $person = Person::find($id);

        $person->name = $request->name;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->biodata = $request->biodata;

        $person->save();

        return redirect('/persons');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person = Person::find($id);

        $person->delete();

        return redirect('/persons');
    }
}
