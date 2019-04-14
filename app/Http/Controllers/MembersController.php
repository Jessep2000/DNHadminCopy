<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use DB;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();


        return View('members/index')->with(compact('members'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $members = new Member();
        $members->name = request('name');
        $members->adress = request('adress');
        $members->email = request('email');
        $members->phone = request('phone');
        $members->boatid = request('boatID');
        $members->iban = request('iban');
        $members->save();

        return redirect('/members');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\members $members
     * @return \Illuminate\Http\Response
     */
    public function show(Member $members)
    {
        return view('members.show', compact('members'));
//        return view('members.show', [
//            'member' => $members
//        ], compact('member'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\members $members
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $members)
    {
//        $entryId = request('entryId');

        $members = Member::all()->filter(function ($entry) {
            return $entry->id == \request('entryId');
        });

        return View('members/edit')->with(compact('members'));
        //
    }

    public function update(Member $members)
    {
        $name = \request('name');
        $adress = \request('adress');
        $email = \request('email');
        $phone = \request('phone');
        $iban = \request('iban');
        $boatid = \request('boatID');

        $updateDetails = array(
            'name' => $name,
            'adress' => $adress,
            'email' => $email,
            'phone' => $phone,
            'iban' => $iban,
            'boatid' => $boatid
        );

        DB::table('members')
            ->where('id', \request('entryId'))
            ->update($updateDetails);
//            ->update(['name' => $name] & ['adress' => $adress] & ['email' => $email] & ['phone' => $phone] & ['iban' => $iban]['boatid'=>$boatid]);

        return redirect('/members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\members $members
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $member = Member::findOrFail(\request('entryId'));

        $member->delete(); //DELETE OCCURS HERE AFTER RECORD FOUND

        return redirect('members');
    }
}
