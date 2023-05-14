<?php

namespace App\Http\Controllers;

use App\Models\dependency;
use Illuminate\Http\Request;

class DependencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dependencies = dependency::all();

        return view('dependencies.index',compact('dependencies'));
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
    public function show(dependency $dependency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dependency $dependency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dependency $dependency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dependency $dependency)
    {
        //
    }
}
