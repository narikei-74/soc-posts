<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampPost;

class CampController extends Controller
{
    public function view() {
        $posts = CampPost::latest()->get();

        return view('camp')->with(['posts' => $posts]);
    }

    public function post(Request $request) {
        $request->validate([
            'name' => 'required',
            'title' => 'required|min:3',
            'text' => 'required',
        ], [
            'name.required' => '名前を入力してください',
            'title.required' => 'タイトルを入力してください',
            'text.required' => 'テキストを入力してください',
            'title.min' => ':min文字以上入力してください',
        ]);

        $post = new CampPost();
        $post->name = $request->name;
        $post->title = $request->title;
        $post->text = $request->text;
        $post->save();

        return redirect()->route('camp_view');
    }

    public function search(Request $request) {
        $request->validate([
            'search' => 'required',
        ], [
            'search.required' => 'キーワードを入力してください',
        ]);

        $search = $request->search;

        $posts = CampPost::where('title', 'like', '%'.$search.'%',)->orWhere('text', 'like', '%'.$search.'%')->get();

        return view('camp')->with(['posts' => $posts, 'search' => $search]);
    }
}
