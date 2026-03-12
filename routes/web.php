<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
Route: :get : Мы говорим сайту ждать запроса типа GET. Это обычный переход по ссылке в браузере. 
'/post/{id}/{name}' : Это адрес(URL), который пользователь вводит в строку браузера.
/post/ - статичная часть
{id} и {name} - параментры-переменные. Фигурные скобки значат: «Сюда пользователь может вписать что угодно». Например: mysite.com/post/15/ivan.
function ($id, $name): Это «мозг» нашего маршрута. Когда пользователь перейдет по адресу, сработает эта функция. Она берет то, что было вписано вместо {id} и {name}, и сохраняет их в переменные $id и $name, чтобы мы могли использовать их внутри.
return "Result: 1: $id, res 2: $name";

Это ответ сервера.
Команда return (вернуть) отправляет результат обратно в браузер пользователя.
Текст в кавычках выведется на экран. При этом PHP достаточно умен: вместо $id и $name он подставит реальные значения, которые были в адресе.

});
Это просто «закрывашка». Мы закрываем функцию (фигурная скобка) и саму команду маршрута (точка с запятой).
 */

Route::get('/', [BasicController::class, 'index'])->name('home');

Route::get('/about', [BasicController::class, 'about'] )->name('about');

Route::get('/contact', [BasicController::class, 'contact'] )->name('contact');

Route::post('/contact', [BasicController::class, 'submit'])->name('contact.post');

Route::get('/posts', [PostController::class, 'index'])->name('posts'); 
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.one'); 
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.one.edit');
Route::get('/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.one.delete');
Route::post('/posts/{id}/edit', [PostController::class, 'update'])->name('posts.edit');



