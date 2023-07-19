<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ResMainController;


Route :: get("/", [MainController :: class, "index"])
    -> name('comics.index');

Route :: get('/comics/create', [MainController :: class, 'create'])
    -> name('comics.create');

Route :: post('/comics', [MainController :: class, 'store'])
    -> name('comics.store');

Route :: get("/comics/{id}", [MainController :: class, "show"])
    -> name('comics.show');

Route :: get("/edit/{id}",[MainController :: class, "edit"])
    -> name('comics.edit');

Route :: put('/update/{id}', [MainController :: class, "update"])
    -> name('comics.update');

Route :: delete('/destroy/{id}', [MainController :: class, 'destroy'])
    -> name('comics.destroy');
