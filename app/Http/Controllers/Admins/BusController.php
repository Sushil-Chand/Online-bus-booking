<?php

namespace App\Http\Controllers\Admins;
use App\Models\Buses;
use App\Models\Operator;
use App\Models\Driver;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the buses.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $buses = Buses::with(['operator', 'driver', 'user'])->get();
        $buses = Buses::all();
        return view('admin.Buses.index', compact('buses'));
    }

    /**
     * Show the form for creating a new bus.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operators = Operator::all();
        $drivers = Driver::all();
        $users = User::all();

        return view('buses.create', compact('operators', 'drivers', 'users'));
    }

    /**
     * Store a newly created bus in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bus_name' => 'required|string',
            'bus_code' => 'required|string',
            'type' => 'required|string',
            'operator_id' => 'required|exists:operators,id',
            'total_seats' => 'required|integer',
            'user_id' => 'required|exists:users,id',
            'driver_id' => 'required|exists:drivers,id',
            'status' => 'required|boolean',
        ]);

        Bus::create($request->all());

        return redirect(route('buses.index'))->with('success', 'Bus created successfully.');
    }

    /**
     * Show the form for editing the specified bus.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bus = Bus::findOrFail($id);
        $operators = Operator::all();
        $drivers = Driver::all();
        $users = User::all();

        return view('buses.edit', compact('bus', 'operators', 'drivers', 'users'));
    }

    /**
     * Update the specified bus in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bus_name' => 'required|string',
            'bus_code' => 'required|string',
            'type' => 'required|string',
            'operator_id' => 'required|exists:operators,id',
            'total_seats' => 'required|integer',
            'user_id' => 'required|exists:users,id',
            'driver_id' => 'required|exists:drivers,id',
            'status' => 'required|boolean',
        ]);

        $bus = Bus::findOrFail($id);
        $bus->update($request->all());

        return redirect(route('buses.index'))->with('success', 'Bus updated successfully.');
    }

    /**
     * Remove the specified bus from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus = Bus::findOrFail($id);
        $bus->delete();

        return redirect(route('buses.index'))->with('success', 'Bus deleted successfully.');
    }
}