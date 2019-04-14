<?php
namespace App\Http\Controllers;
use App\Budget;
use Illuminate\Http\Request;
class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$account = \App\account::all();
        $budgets = Budget::all();
//         dd($budgets);
        return view('./budget_views/index', compact('budgets'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/budget_views/create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responsex
     */
    public function store(Request $request)
    {
        $budget = new budget();
        $budget->name = request('inputname');
        $budget->active = request('inputActive');
        $budget->description = request('inputdescription');
        $budget->save();
        return redirect('/budget');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Budget $budget)
    {
        // return view(‘account.show’);
        return view('budget_views.show', ["budget" => $budget]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budget = budget::find($id);
        return view('budget_views.edit', compact('budget'));
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
        //
        $budget = budget::find($id);
        $budget->name = request('inputname');
        $budget->active = request('inputActive');
        $budget->description = request('inputdescription');
        $budget->save();
        return redirect('/budget');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(budget $budget)
    {
        $budget->findOrFail($budget)->first()->delete();
        return redirect('/budget');
    }

}