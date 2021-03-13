<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'PHP-Course', 'description' => 'PHP Description', 'posted_by' => 'Ali', 'created_at' => '2021-04-18 '],
            ['id' => 2, 'title' => 'Nodejs-Course', 'description' => 'Nodejs Description', 'posted_by' => 'Omar', 'created_at' => '2021-04-18 '],
            ['id' => 3, 'title' => 'Python-Course', 'description' => 'Python Description', 'posted_by' => 'Hamza', 'created_at' => '2021-04-18 ']
        ];

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($post)
    {
        $post = ['id' => 1, 'title' => 'PHP-Course', 'description' => 'PHP Description', 'posted_by' => 'Ali', 'created_at' => '2021-04-18 '];

        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        return redirect()->route('posts.index');
    }

    public function edit($post)
    {
        $post = ['id' => 1, 'title' => 'PHP-Course', 'description' => 'PHP Description', 'posted_by' => 'Ali', 'created_at' => '2021-04-18 '];
        return view('posts.edit',[
            'post' => $post
        ]);
    }

    public function destroy($post)
    {
        dd($post);
        return view('posts.destroy', [
            'post' => $post
        ]);
    }


}
