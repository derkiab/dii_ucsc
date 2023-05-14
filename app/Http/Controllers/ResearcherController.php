<?php

namespace App\Http\Controllers;

use App\Models\researcher;
use Illuminate\Http\Request;

class ResearcherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $researchers = researcher::all();

        return view('researchers.index', compact('researchers'));
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
    public function show(researcher $researcher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(researcher $researcher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, researcher $researcher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(researcher $researcher)
    {
        //
    }
}
