<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
   
});

Route::get('/sayhello', function () {
   return "Hello TCO 2770672";
});

Route::get('/pets/show', function () {
   $pets = App\Models\Pet::all();
   dd($pets->toArray());
});

Route::get('/pets/view', function () {
    $pets = App\Models\Pet::all();
    return view('petsview')->with('pets', $pets);
 });

 Route::get('/users/view', function () {
    $users = App\Models\User::all();
    return view('usersview')->with('users', $users);
 });