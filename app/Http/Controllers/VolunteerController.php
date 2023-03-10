<?php

namespace App\Http\Controllers;

use App\Models\{Volunteer,User,Profession, Country, City};
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

/**
 * Class VolunteerController
 * @package App\Http\Controllers
 */
class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = User::with("roles")->whereHas("roles", function($q) {
            $q->whereIn("name", ["volunteer"]);
        })->get();
     
        // $volunteers = User::select(
        //     "volunteers.id", 
        //     "volunteers.fullname",
        //     "volunteers.city", 
        //     "users.name as user_name"
        // )
        // ->join("users", "users.id", "=", "volunteers.leader_id")
        // ->get();
        return view('volunteer.index', compact('volunteers'));

        // $volunteers = Volunteer::paginate();

        // return view('volunteer.index', compact('volunteers'))
        //     ->with('i', (request()->input('page', 1) - 1) * $volunteers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $leader = User::with("roles")->whereHas("roles", function($q) {
            $q->whereIn("name", ["leader"]);
        })->get();

        $profession = Profession::get(['id', 'name']);
        $countries = Country::get(['id', 'name']);
 
        return view('auth.register',compact('leader','profession','countries'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Volunteer::$rules);

        $volunteer = Volunteer::create($request->all());

        return redirect()->route('volunteers.index')
            ->with('success', 'Volunteer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $volunteer = Volunteer::find($id);

        return view('volunteer.show', compact('volunteer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = Volunteer::find($id);

        return view('volunteer.edit', compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Volunteer $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        request()->validate(Volunteer::$rules);

        $volunteer->update($request->all());

        return redirect()->route('volunteers.index')
            ->with('success', 'Volunteer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $volunteer = Volunteer::find($id)->delete();

        return redirect()->route('volunteers.index')
            ->with('success', 'Volunteer deleted successfully');
    }

    public function fetchState(Request $request)
    {
        $data['cities'] = City::where('country_id',$request->country_id)->get(['name','id']);
        return response()->json($data);
    }
}
