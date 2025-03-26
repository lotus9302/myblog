<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Blog;

class BlogController extends Controller
{
    public function add()
    {
        return view('admin.blog.create');
    }

    // 以下を追記
    public function create(Request $request)
    {
        // admin/news/createにリダイレクトする
        return redirect('admin/create');
    }
    public function index(Request $request)  
    {
        $posts = Blog::all()->sortByDesc('updated_at');

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('blog.index', ['posts' => $posts]);
    }

        // TODO: idで検索
        // TODO: 詳細画面用のbladeファイルに渡す

    public function show(Request $request)
    {    $blog = Blog::find($request->id);
        return view('blog.show', ['blog_form' => $blog]);
        

    }    
}





