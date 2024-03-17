<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FitnessClass;
use App\Models\Booking;
use App\Mail\ConfirmBooking;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(){
        $bookings = BOOKING::all();
        return view('back.booking.index', compact('bookings'));
    }

    public function createAdmin()
    {
        $classes = FitnessClass::all();
        return view('back.booking.create', compact('classes'));
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'userSearchRez'=>'required'
        ]);
        $class = FitnessClass::find($request->class);
        $user = User::find($request->userSearchRez);
        $classParticipants=explode('|' , $class->participants);
        $count = count($classParticipants);
        if($count < 10)
        {
            Booking::create([
                'name'=>$user->name,
                'email'=>$user->email,
                'class'=>$class->title,
                'start'=>$class->start,
                'end'=>$class->end,
                'user_id'=>$request->userSearchRez,
            ]);
            if($class->participants === NULL)
            {
                $class->update([
                    'participants'=>$user->id 
                ]);
            }
            else
            {
                $class->update([
                    'participants'=>$class->participants . '|' . $user->id
                ]);
            }
            Mail::to($user->email)->send(new ConfirmBooking($class->title, $class->start, $class->end, $user->name));
            return redirect(route('index.admin.booking'))->with('success', 'The booking has been created');
        }
        else
        {
            return redirect()->back()->with('error', 'The class is full');
        }
        
    }

    public function searchUsers(Request $request){
        $searchQuery = $request->query('query');
        $users = User::where('name', 'like', "%$searchQuery%")->orWhere('email', 'like', "%$searchQuery%")->get();
        return response()->json($users);
    }
    

    public function userBookings()
    {
        $bookings = Booking::where('user_id', auth()->user()->id)->get();
        return view('booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = FitnessClass::all();
        $user = User::find(auth()->user()->id);
        return view('booking.create', compact('classes', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $class = FitnessClass::find($request->class);
        //dd($request->class);
        $classParticipants=explode('|' , $class->participants);
        $count = count($classParticipants);
        if($count < 10)
        {
            Booking::create([
                'name'=>$request->user_name,
                'email'=>$request->user_email,
                'class'=>$class->title,
                'start'=>$class->start,
                'end'=>$class->end,
                'user_id'=>auth()->user()->id
            ]);
            if($class->participants === NULL)
            {
                $class->update([
                    'participants'=>auth()->user()->id
                ]);
            }
            else
            {
                $class->update([
                    'participants'=>$class->participants . '|' . auth()->user()->id
                ]);
            }
            Mail::to(auth()->user()->email)->send(new ConfirmBooking($class->title, $class->start, $class->end, auth()->user()->name));
            return redirect(route('index.booking'))->with('success', 'The booking has been created');
        }
        else
        {
            return redirect()->back()->with('error', 'The class is full');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

  
    public function cancel(string $id)
    {
        $booking = Booking::Find($id);
        $booking->delete();
        return response()->json('success');
    }
}
