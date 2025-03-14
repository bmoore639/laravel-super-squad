<?php

<?php
namespace App\Http\Controllers;
use App\Models\Superheroes;
use Illuminate\Http\Request;
class HeroController extends Controller
{
/**
* Display a listing of tasks.
*/
public function index()
{
// Get all tasks
$hero = Superheroes::all();
// Return a view (e.g., resources/views/tasks/index.blade.php)
// with the tasks data
return view('super-heroes.index', compact('Heroes'));
}
/**
* Show the form for creating a new task.
*/
public function create()
{
// Return a view to create a new task
return view('Heroes.create');
}
/**
* Store a newly created task.
*/
public function store(Request $request)
{
// Validate the request
$validated = $request->validate([
   
'hero_name' => 'required|string',
'secret_identity' => 'nullable|string',
'powers' => 'required|string',
'power_catagory' => 'required|string',
'origin' => 'required|string',

]);

Superheroes::create($validated);
// Redirect or return
return redirect()->route('super-heroes.index')->with('success', 'Hero created successfully!');
}
/**
* Display a specific task.
*/
public function show(Superheroes $hero)
{
return view('Heroes.show', compact('Heroes'));
}
/**
* leave the following empty for now
*/
public function edit(Superheroes $hero)
{
//
}
/**
* Update the specified task.
*/
public function update(Request $request, Superheroes $hero)
{
//
}
/**
* Remove the specified task.
*/
public function destroy(Superheroes $hero)
{
//
}
}