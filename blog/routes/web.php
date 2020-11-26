<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
// verified es lo que obliga la verificacion del correo electronico
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

//definir una vista de vue como el home de app
Route::get('/home', function () {
    return Inertia\Inertia::render('VistaPrincipal');
})->name('inicio');


// Route::get("/flash", function(){
//     session()->flash("error","Nueva sesion");
//     return redirect(route("dashboard"));
// });

// Route::get('/', function () {
//     return Inertia\Inertia::render('Pagina');
// })->name('pagina');
