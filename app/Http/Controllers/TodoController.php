<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\Todo;
use \App\Models\Person;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {

        $todos = Todo::all();
        $persons = Person::all(); 
        return view('todo.index', [
            'todos' => $todos,
            'persons' => $persons,

        ]);
    }

   
    public function create()
    {
        $persons = Person::all();
        return view('todo.create',[
            'persons' => $persons,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todo = new Todo();

        $todo->title = $request->title;
        $todo->goal = $request->goal;
        $todo->persons_id = $request->person;
        $todo->deadline = $request->deadline;
        $todo->bonus = $request->bonus;
        $todo->punish = $request->punish;
        $todo->description = $request->description;

        $todo->save();

        return redirect('/todos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo = Todo::find($id);
        $person = Person::find($id);

        return view('todo.show', [
            'todo' => $todo,
            'person' => $person,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::find($id);
        $persons = Person::all();

        return view('todo.edit', [
            'todo' => $todo,
            'persons' => $persons,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo = Todo::find($id);
        

        $todo->title = $request->title;
        $todo->goal = $request->goal;
        $todo->persons_id = $request->person;
        $todo->deadline = $request->deadline;
        $todo->bonus = $request->bonus;
        $todo->punish = $request->punish;
        $todo->description = $request->description;
        

        $todo->save();

        return redirect('/todos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        return redirect('/todos');
    }
}
