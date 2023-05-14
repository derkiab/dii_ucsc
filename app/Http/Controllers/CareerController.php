<?php

namespace App\Http\Controllers;

use App\Models\career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = career::all();
        return view('careers.index',compact('careers'));
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
    public function show(career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, career $career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(career $career)
    {
        //
    }
}
