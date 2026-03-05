<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {   
    return view('static.home') ;
})->name('home');

Route::get('/about', function() {
    return view('static.about') ;
})->name('about');

Route::get('/contact', function() {
    return view('static.contact') ;
})->name('contact');

Route::post('/contact', function() {
    //dd(Request::all());
    return redirect('/contact')->withInput();
})->name('contact.post');