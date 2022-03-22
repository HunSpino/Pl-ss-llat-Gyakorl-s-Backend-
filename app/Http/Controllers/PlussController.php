<?php

namespace App\Http\Controllers;

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
        $plusses = Pluss::orderBy('id')->get();
        return view('plusses.index', [ 'plusses' => $plusses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plusses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adatok = $request->only(['name']);
        $pluss = new Pluss();
        $pluss->fill($adatok);
        $pluss->save();
        return redirect()->route('plusses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function show(Pluss $pluss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function edit(Pluss $pluss)
    {
        return view('plusses.edit',['pluss' =>$pluss]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pluss $pluss)
    {
        $adatok = $request->only(['name']);
        $pluss->fill($adatok);
        $pluss->save();
        return redirect()->route('plusses.index', $pluss->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pluss  $pluss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pluss $pluss)
    {
        $pluss->delete();
        return redirect()->route('plusses.index');
    }
}
