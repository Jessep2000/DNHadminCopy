<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\account;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});
//route::resource('account', 'accountController');

Route::get('/account', 'accountController@index');

Route::get('/account/create', 'accountController@create');

Route::get('/account/{id}/show', 'accountController@show');

Route::get('/account/{id}/edit', 'accountController@edit');

Route::patch('/account/{id}', 'accountController@update');

Route::delete('/account/{id}', 'accountController@destroy');

//Route::get('/account/{account}/edit', 'accountController@edit');

//Route::patch('/account/{account}', 'accountController@update');

Route::get('/account/delete', 'accountController@destroy');

//Ships routes
Route::get('/ships/create', 'shipsController@create');

Route::post('/shipsStore', 'shipsController@store');

Route::get('/ships', 'shipsController@index');

Route::get('/ships/{id}/edit', 'shipsController@edit');

Route::patch('/ships{id}', 'shipsController@update');

Route::delete('/ships/{id}', 'shipsController@destroy');

route::resource('ships', 'shipsController');

route::resource('yeartariffs', 'YeartariffsController');

route::resource('account', 'accountController');

Route::get('/budget/create', 'BudgetController@create');
Route::get('/budget/{id}/edit', 'BudgetController@edit');
Route::patch('budget/{id}', 'BudgetController@update');
Route::resource('budget', 'BudgetController');
Route::get('/home', 'HomeController@index')->name('home');
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $accounts = account::where('name','LIKE','%'.$q.'%')->orWhere('IBAN','LIKE','%'.$q.'%')->get();
    if(count($accounts) > 0)
        return view('account.index', compact('accounts'))->withQuery ( $q );
    else return view ('account.index', compact('accounts'))->withMessage('No Details found. Try to search again !');
});

Route::get('/storeMember', 'MembersController@store');

Route::get('/editEntry', 'MembersController@edit');

Route::get('/members', 'MembersController@index');

Route::get('/members/create', 'MembersController@create');

//Route::resource('members', 'MembersController');

Route::get('updateEntry', 'MembersController@update');

Route::get('members/edit', 'MembersController@edit');

Route::get('delete', 'MembersController@destroy');


