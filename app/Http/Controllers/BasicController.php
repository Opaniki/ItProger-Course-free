<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        return view('static.home');
    }

    public function about()
    {
        return view('static.about');
    }

    public function contact()
    {
        return view('static.contact');
    }

    public function submit(ContactRequest $request)
    {
        //$request->validate(); // Валидация уже выполняется автоматически благодаря ContactRequest

        $message = new Message();
        $message-> name = $request->input ('name');
        $message-> email = $request->input ('email');
        $message-> subject = $request->input ('subject');
        $message-> text = $request->input ('message');
        $message-> save();

        return redirect()->route('home');
        //return redirect('/'); Один из вариантов перенаправления после сохранения данных
    }
}