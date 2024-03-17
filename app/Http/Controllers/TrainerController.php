<?php

namespace App\Http\Controllers;
use App\Models\Trainer;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view('back.trainers.index')->with('trainers', $trainers);
        return view('back.fitnessClasses.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('trainersImages'), $imageName);
        Trainer::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'age'=>$request->age,
            'speciality'=>$request->speciality,
            'image'=>$imageName
        ]);
        return redirect(route('index.trainers'))->with('success', 'The trainer has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainer = Trainer::find($id);
        return view('back.trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trainer = Trainer::find($id);
        return view('back.trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = Trainer::find($id);
        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('trainersImages'), $imageName);
        }
        if($request->image){
            $class->update([
                'name'=>$request->name,
                'description'=>$request->description,
                'age'=>$request->age,
                'speciality'=>$request->speciality,
                'image'=>$imageName
            ]);
        }
        else
        {
            $class->update([
                'name'=>$request->name,
                'description'=>$request->description,
                'age'=>$request->age,
                'speciality'=>$request->speciality
            ]);
        }
        return redirect(route('index.trainers'))->with('success', 'The trainer has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $trainer = Trainer::find($id);
        $trainer->delete();
        return redirect(route('index.trainers'))->with('success', 'The trainer has been deleted');
    }
}
