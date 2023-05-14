<?php

namespace App\Http\Controllers;

use App\Models\center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centers = center::all();

        return view('centers.index',compact('centers'));
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
    public function show(center $center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(center $center)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, center $center)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(center $center)
    {
        //
    }
}
