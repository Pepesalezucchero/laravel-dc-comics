<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

Route::get('/', [ComicController :: class, 'index']) -> name('comics.index');

Route::get('/comics/aggiunta', [ComicController :: class, 'create']) -> name('comics.create');
Route::post('/comics', [ComicController :: class, 'store']) -> name('comics.store');

Route::get('/comics/{id}', [ComicController :: class, 'show']) -> name('comics.show');

Route::delete('/comics/{id}', [ComicController :: class, 'destroy']) -> name('comics.destroy');

Route::get('/comics/{id}/edit', [ComicController :: class, 'edit']) -> name('comics.edit');

Route::put('/comics/{id}', [ComicController :: class, 'update']) -> name('comics.update');