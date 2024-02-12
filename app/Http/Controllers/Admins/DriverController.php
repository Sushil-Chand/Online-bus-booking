<?php

namespace App\Http\Controllers\Admins;
use App\Models\Driver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the drivers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();

        return view('admin.Driver.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new driver.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Driver.create');
    }

    /**
     * Store a newly created driver in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female',
            'license_number' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'user_id' => 'required|integer',
            'status' => 'required|string|in:Active,Inactive',
        ]);

        Driver::create($request->all());

        return redirect()->route('admin.Driver.index')->with('success', 'Driver created successfully.');
    }

    /**
     * Display the specified driver.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return view('admin.Driver.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified driver.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('admin.Driver.edit', compact('driver'));
    }

    /**
     * Update the specified driver in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female',
            'license_number' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'user_id' => 'required|integer',
            'status' => 'required|string|in:Active,Inactive',
        ]);

        $driver->update($request->all());

        return redirect()->route('admin.Driver.index')->with('success', 'Driver updated successfully.');
    }

    /**
     * Remove the specified driver from the database.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();

        return redirect()->route('admin.Driver.index')->with('success', 'Driver deleted successfully.');
    }
}
