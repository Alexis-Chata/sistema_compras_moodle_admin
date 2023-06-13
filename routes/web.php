<?php

use App\Models\Curso;
use App\Models\Grupo;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $cursos = Curso::latest()->take(5)->get();

    $cursos->each(function ($item, $key) {
        return $item->push($item->gruposlastlimit);
    });

    //return $cursos;
    return view('silicon-front.index', compact('cursos'));
})->name('index');

Route::get('/carrito', function () {
    return view('silicon-front.cart');
})->name('carrito');

Route::get('/cursos', function () {
    $grupos = Grupo::paginate(12);
    return view('silicon-front.cursos', compact('grupos'));
})->name('cursos');

Route::get('/mycursos', function () {
    $grupos = Grupo::paginate(12);
    return view('silicon-front.mycursos', compact('grupos'));
})->name('mycursos');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




