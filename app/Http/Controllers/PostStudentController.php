<?php

namespace App\Http\Controllers;

use App\Models\post_student;
use Illuminate\Http\Request;

class PostStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post_students = post_student::all();

        return view('post_students.index', compact('post_students'));
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
    public function show(post_student $post_student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post_student $post_student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post_student $post_student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post_student $post_student)
    {
        //
    }
}
