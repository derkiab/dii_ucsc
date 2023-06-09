<?php

namespace App\Http\Controllers;

use App\Models\publication;
use App\Models\Academic;
use App\Models\Administrative;
use App\Models\post_student;
use App\Models\pre_student;
use App\Models\researcher;
use App\Models\part_time;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = publication::all();
        return view('publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $academics = Academic::all();
        $administratives = Administrative::all();
        $part_times = part_time::all();
        $post_students = post_student::all();
        $pre_students = pre_student::all();
        $researchers = researcher::all();


        return response(view('publications.create',compact('academics','administratives','part_times','post_students','pre_students','researchers')));
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
    public function show(publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(publication $publication)
    {
        //
    }
}
