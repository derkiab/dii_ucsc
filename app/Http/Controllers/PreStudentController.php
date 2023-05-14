<?php

namespace App\Http\Controllers;

use App\Models\pre_student;
use Illuminate\Http\Request;

class PreStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pre_students = pre_student::all();

        return view('pre_students.index', compact('pre_students'));
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
    public function show(pre_student $pre_student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pre_student $pre_student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pre_student $pre_student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pre_student $pre_student)
    {
        //
    }
}
