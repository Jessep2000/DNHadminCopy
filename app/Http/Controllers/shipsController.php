<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ships;

class shipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Ships.shipsIndex', [
            'Ships' => Ships::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ships.shipsCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Ship= new Ships();

        $Ship->Name = request('Name');
        $Ship->Size = request('Size');
        $Ship->image_url =request('image_url');
        $Ship->save();

        return redirect('ships');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ships $ship)
    {
        return view('Ships.shipsShow', [
            'ship' => $ship,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ship = Ships::find($id);
        return view('Ships.shipsEdit', compact('ship'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ship = Ships::find($id);

        $ship->Name = request('Name');
        $ship->Size = request('Size');
        $ship->image_url =request('image_url');
        $ship->save();

        return redirect('ships');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ships::findOrFail($id)->delete();
        return redirect('/ships');
    }
}
