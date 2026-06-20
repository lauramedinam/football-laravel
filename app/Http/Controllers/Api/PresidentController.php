<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function index()
    {
        $presidents = President::all();
        return $presidents;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'year' => 'required|integer',
        ]);

        $president = President::create($request->all());

        return $president;
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Se mantiene el método dinámico si usas algún trait de consulta, de lo contrario puedes usar findOrFail($id)
        $president = President::findOrFail($id);
        return $president;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\President  $president
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, President $president)
    {
        $request->validate([
            'name' => 'required|max:255',
            'year' => 'required|integer',
        ]);

        $president->update($request->all());

        return $president;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\President  $president
     * @return \Illuminate\Http\Response
     */
    public function destroy(President $president)
    {
        $president->delete();
        return $president;
    }
}

