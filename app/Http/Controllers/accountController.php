<?php

namespace App\Http\Controllers;


use App\account;
use Couchbase\RegexpSearchQuery;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class accountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$account = \App\account::all();
        $accounts = account::all();
//        $maxValue = account::orderBy('id', 'desc')->value('id'); // gets only the id
//         dd($accounts);

        return view('account.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return DB::table('accounts')->orderBy('upload_time', 'desc')->first();
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account = new account();
        $account->name = request('inputname');
        $account->IBAN = request('inputIBAN');
        $account->description = request('inputdescription');
        $account->save();

        return redirect('account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account, $id)
    {
        $account = account::find($id);
        // return view('account.show');
        return view('account.show', [
            'account' => $account,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $accounts = account::all()->filter(function ($entry){
//            return $entry->id == \request('entryID');
//        });
//        dd($id);
        $account = account::find($id);

        return view('account.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $account = account::find($id);
            $account->name = request('inputname');
            $account->IBAN = request('inputIBAN');
            $account->description = request('inputdescription');
            $account->save();
            return redirect('account');

//        return view('/account/update', compact('accounts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        account::findOrFail($id)->delete();
        return redirect('account');
    }
}
