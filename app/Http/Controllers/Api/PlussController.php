<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlussRequest;
use App\Models\Pluss;
use Illuminate\Http\Request;

class PlussController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plusses = Pluss::all();
        return response()->json($plusses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlussRequest $request)
    {
        $pluss = new Pluss();
        $pluss->fill($request->all());
        $pluss->save();
        return response()->json($pluss, 201);
    }

    public function show(Pluss $pluss)
    {
        return response()->json($pluss);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function update(PlussRequest $request, Pluss $pluss)
    {
        $pluss->fill($request->all());
        $pluss->save();
        return response()->json($pluss,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Pluss::destroy($id);
        return response()->noContent();
    }
}
