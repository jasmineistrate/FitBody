<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Trainer;
use App\Models\FitnessClass;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $users = User::all();
        $bookings = Booking::all();
        $classes = FitnessClass::all();
        $trainers = Trainer::all();
        return view('dashboard', compact('users', 'bookings', 'classes', 'trainers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function usersPerMonth()
    {
        $usersPerMonth = User::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as total'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->orderBy(DB::raw('MONTH(created_at)'))
        ->get();
        return response()->json($usersPerMonth);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
