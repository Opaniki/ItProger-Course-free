<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {   
        //$posts = Post::all();   // Получаем все записи из таблицы posts
        //$posts = Post::find(1);   // Получаем запись с id = 1
        //$posts = Post::where('title', 'Tesla')->get();   // Получаем все записи, у которых поле title равно 'Tesla'
        //$posts = Post::where('id', '>', 1)->get();   // Получаем все записи, у которых поле id больше 1
        //$posts = Post::randomOrder()->first();   // Получаем одну случайную запись из таблицы posts

        $posts = Post::orderBy('id', 'desc')->get();   // Получаем все записи, отсортированные по id в порядке убывания
        return view('posts.index')->with('posts', $posts); // Передаем данные в представление
    }

    public function show($id) 
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);

    }

    public function edit($id) 
    {
        $post = Post::findOrFail($id);
        return view('posts.edit')->with('post', $post);

    }

    public function update($id, Request $request)
    {   
        $data = $request->validate([
            'title' => 'required|min:5',
            'anonce' => 'required|min:7',
            'text' => 'required|min:10',    
        ]);

        $post = Post::findOrFail($id);
        $post-> title = $data['title'];
        $post-> anonce = $data['anonce'];
        $post-> text = $data['text'];
        $post-> save();

        return redirect()->route('posts.one', $id);
    }

    public function delete($id) 
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts');
    }

}