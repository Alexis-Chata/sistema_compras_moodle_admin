<?php

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\Modalidad;
use App\Models\User;
use App\Utils\PaginateCollection;
use Gloudemans\Shoppingcart\Facades\Cart;
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
    return Cart::instance('carrito')->content()->pluck('id');
    $categorias = categoria::latest()->take(5)->get();

    $categorias->each(function ($item, $key) {
        return $item->push($item->cursoslastlimit);
    });

    $categorias = $categorias->filter(function ($item, $key) {
        return $item->cursoslastlimit->count() > 0;
    });

    //return $categorias;
    return view('silicon-front.index', compact('categorias'));
})->name('index');

Route::get('/login', function () {
    return view('silicon-front.login');
})->name('login');

Route::get('/carrito', function () {
    return view('silicon-front.cart');
})->name('carrito');

Route::get('/cursos', function () {
    $cursos = Curso::paginate(12);
    return view('silicon-front.cursos', compact('cursos'));
})->name('cursos');

Route::get('/curso/{id}', function ($id) {
    $modalidads = Modalidad::with('curso.categoria', 'curso.grupos', 'cuotas', 'gcuotas.grupo')->has('gcuotas', '>', 0)->whereCursoId($id)->get();
    return view('silicon-front.curso', compact('modalidads'));
})->name('curso');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/mycursos', function () {
        $user = User::with('cmatriculas.modalidad.curso.categoria', 'cmatriculas.modalidad.curso.grupos')->find(auth()->user()->id);
        $cursos = ($user->cmatriculas->pluck('modalidad.curso'));
        $grupos = ($user->cmatriculas->pluck('modalidad.curso.grupos')->collapse());
        $grupos = PaginateCollection::paginate($grupos, 3);
        return view('silicon-front.estudiantes.mycursos', compact('grupos', 'cursos'));
    })->name('mycursos')->middleware('role:Estudiante');

    Route::get('/dashboard', function () {
        $user = User::with('cmatriculas.modalidad.curso.categoria', 'cmatriculas.modalidad.curso.grupos')->find(auth()->user()->id);
        $cursos = ($user->cmatriculas->pluck('modalidad.curso'));
        $grupos = ($user->cmatriculas->pluck('modalidad.curso.grupos')->collapse());
        $grupos = PaginateCollection::paginate($grupos, 3);
        return view('silicon-front.estudiantes.dashboard', compact('grupos'));
    })->name('dashboard')->middleware('role:Estudiante');

    Route::get('/historial-pagos', function () {
        return view('silicon-front.estudiantes.historial-pagos');
    })->name('historial-pagos')->middleware('role:Estudiante');

    Route::get('/lista-deseos', function () {
        return view('silicon-front.estudiantes.lista-deseos');
    })->name('lista-deseos')->middleware('role:Estudiante');
});
