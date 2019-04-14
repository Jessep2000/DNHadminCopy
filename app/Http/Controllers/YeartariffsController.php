<?php

namespace App\Http\Controllers;

use App\Yeartariff;
use Illuminate\Http\Request;

class YeartariffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $yeartariffs = \App\YearTariff::all();

        // dd($yeartariffs);
 
        return view('./Yeartariffs/index', [

            'Yeartariffs' => $yeartariffs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/yeartariffs/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $yeartariffs = new yeartariff();
        $yeartariffs->year = request('inputyear');
        $yeartariffs->contributions = request('inputcontribution');
        $yeartariffs->port_dues = request('inputportdues');
        $yeartariffs->energy_allowance = request('inputenergyallowance');
        $yeartariffs->guest = request('inputguest');
        $yeartariffs->save();

        return redirect('/yeartariffs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Yeartariff  $yeartariff
     * @return \Illuminate\Http\Response
     */
    public function show(Yeartariff $yeartariff)
    {
        // return view('yeartariffs.show');
        return view('yeartariffs.show', compact('yeartariff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Yeartariff  $yeartariff
     * @return \Illuminate\Http\Response
     */
    public function edit(Yeartariff $yeartariff)
    {
        return view('yeartariffs/edit', compact('yeartariff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Yeartariff  $yeartariff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yeartariff $yeartariff)
    {
        $yeartariff->year = request('inputyear');
        $yeartariff->contributions = request('inputcontribution');
        $yeartariff->port_dues = request('inputportdues');
        $yeartariff->energy_allowance = request('inputenergyallowance');
        $yeartariff->guest = request('inputguest');
        $yeartariff->save();

        return redirect('/yeartariffs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Yeartariff  $yeartariff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yeartariff $yeartariff)
    {
        $yeartariff->findOrFail($yeartariff)->first()->delete();
        return redirect('/yeartariffs');
    }
}
