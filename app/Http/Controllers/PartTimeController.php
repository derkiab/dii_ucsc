<?php

namespace App\Http\Controllers;

use App\Models\part_time;
use Illuminate\Http\Request;

class PartTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $part_times = part_time::all();

        return view('part_times.index', compact('part_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(part_time $part_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(part_time $part_time)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, part_time $part_time)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(part_time $part_time)
    {
        //
    }
}
