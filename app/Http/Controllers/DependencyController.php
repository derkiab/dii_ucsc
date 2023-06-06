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
        return response(view('dependencies.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'identificador' => 'required|max:4|string|regex:/^(?!(?:\D*\d){4}).*$/',
            'nombre' => 'required|unique:dependencies|string',


        ]);

        $dependency = new dependency([

            'identificador' => $request->get('identificador'),
            'nombre' => $request->get('nombre'),
            


        ]);

        $dependency->save();


        return redirect('dependencies')->with('success', 'Dependencia creado exitosamente!');
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
    public function destroy($id)
    {
        $dependency = dependency::find($id);
        $dependency->delete();

        return response()->json(['success' => true]);
    }
}
