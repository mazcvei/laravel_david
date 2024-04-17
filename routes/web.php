<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    $gerente = \App\Models\User::find(4);
    $pescador = \App\Models\User::find(8);
   // dd($pescador->cotosPescaPivot);
    foreach($pescador->cotosPescaPivot as $coto){
        echo $coto->cotoPesca->rio ."<br>";
    }
   // dd($pescador->load('cotosPescaPivot','cotosPescaPivot.cotoPesca'));

   // dd($licencia1->idiomas);
});
