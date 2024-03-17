<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FitnessClass;
use App\Models\Trainer;
use App\Models\User;

class FitnessClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = FitnessClass::all();
        return view('back.fitnessClasses.index', compact('classes'));
    }

    public function getAllClasses()
    {
        $classes = FitnessClass::all();
        return response()->json($classes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trainers = Trainer::all();
        return view('back.fitnessClasses.create', compact('trainers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'image'=>'required'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('classesImages'), $imageName);
        FitnessClass::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'trainer'=>$request->trainer,
            'duration'=>$request->duration,
            'start'=>$request->start,
            'end'=>$request->end,
            'time'=>$request->time,
            'image'=>$imageName,
        ]);
        return redirect(route('index.classes'))->with('success', 'The class has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $class = FitnessClass::find($id);
        $classParticipants=explode('|' , $class->participants);
        $users = User::whereIn('id', $classParticipants)->get();
        return view('back.fitnessClasses.show', compact('class', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $class = FitnessClass::find($id);
        $trainers = Trainer::all();
        return view('back.fitnessClasses.edit', compact('class', 'trainers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = FitnessClass::find($id);
        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('classesImages'), $imageName);
        }
        if($request->image){
            $class->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'trainer'=>$request->trainer,
                'duration'=>$request->duration,
                'start'=>$request->start,
                'end'=>$request->end,
                'time'=>$request->time,
                'image'=>$imageName
            ]);
        }
        else
        {
            $class->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'trainer'=>$request->trainer,
                'duration'=>$request->duration,
                'start'=>$request->start,
                'end'=>$request->end,
                'time'=>$request->time
            ]);
        }
        return redirect(route('index.classes'))->with('success', 'The class has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $class = FitnessClass::find($id);
        $class->delete();
        return redirect(route('index.classes'))->with('success', 'The class has been deleted');
    }
}
