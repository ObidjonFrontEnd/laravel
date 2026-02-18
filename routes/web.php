<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

Route::get('/', [BasicController::class , 'index' ])->name('home');

//Route::get('/post/{id}', function ($id) {
//    return 'id:'.$id;
//})->name('post');

route::get('/form', [BasicController::class , 'form' ])->name('form');

route::post('/form', [BasicController::class , 'submit' ])->name('submit');

route::get('/post', [PostController::class , 'index' ])->name('posts');

route::get('/post/create', [PostController::class , 'create' ])->name('post.create');

route::get('/post/{id}', [PostController::class , 'show' ])->name('post.one');

route::get('/post/{id}/edit', [PostController::class , 'edit' ])->name('post.one.edit');

route::post('/post/{id}/edit', [PostController::class , 'update' ])->name('post.one.update');

route::get('/post/{id}/delete', [PostController::class , 'delete' ])->name('post.one.delete');

route::post('/post/create', [PostController::class , 'save' ])->name('post.save');
