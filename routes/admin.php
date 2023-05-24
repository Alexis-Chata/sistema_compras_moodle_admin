<?php

use Illuminate\Support\Facades\Route;


Route::view('usuario/index', 'administrador.usuarios.index')->middleware('can:admin.usuarios.index')->name('admin.usuarios.index');
Route::view('estudiante/index', 'administrador.estudiantes.index')->middleware('can:admin.usuarios.index')->name('admin.estudiantes.index');
Route::view('curso/index', 'administrador.cursos.index')->middleware('can:admin.usuarios.index')->name('admin.cursos.index');
Route::view('usuario/cambiar', 'administrador.usuarios.cambiar_password')->middleware('can:admin.usuarios.index')->name('admin.usuarios.cambiar');
Route::view('', 'administrador.index')->middleware('can:admin.usuarios.index')->name('admin.index');

