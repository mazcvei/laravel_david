<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
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

/*Route::get('/test', function () {
    $gerente = \App\Models\User::find(4);
    $pescador = \App\Models\User::find(8);
   // dd($pescador->cotosPescaPivot);
    foreach($pescador->cotosPescaPivot as $coto){
        echo $coto->cotoPesca->rio ."<br>";
    }
   // dd($pescador->load('cotosPescaPivot','cotosPescaPivot.cotoPesca'));

   // dd($licencia1->idiomas);
});*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function(){
    Route::resource('user',UsuarioController::class);
    Route::resource('hotel',HotelController::class);
    Route::get('asignar_hotel',[HotelController::class,'form_asignar_usuario'])->name('asignar.hotel');
    Route::post('reservar',[HotelController::class,'asignar_hotel_pescador'])->name('reservar');
});

require __DIR__.'/auth.php';
