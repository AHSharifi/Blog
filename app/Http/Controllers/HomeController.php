<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home() {
        $news = News::all();
        return view('home' , compact('news'));
    }

    public function Create() {
        return view('create');
    }

    public function Store(Request $req) {
        $name = $req->file('image')->getClientOriginalName();
        $size = $req->file('image')->getSize();
        $req->file('image')->storeAs('public/images/', $name);

        News::create([
            'title'=>$req->title,
            'text'=>$req->text,
            'image'=>$name,
            'size'=>$size
        ]);
        return redirect()->route('dashboard');
    }

    public function List() {
        $news = News::paginate(5);
        return view('list' , compact('news'));
    }

    public function Edit($id) {
        $news = News::where('id' , '=' , $id)->first();
        return view('edit' , compact('news'));
    }

    public function Update(Request $req , $id) {
        $req->file('image')->storeAs('public/images/'.$req->file('image')->getClientOriginalName());
        News::where('id' , '=' , $id)
            ->update([
                'title' => $req->title,
                'text' => $req->text,
                'image' => $req->file('image')->getClientOriginalName(),
                'size' => $req->file('image')->getSize()
            ]);

        return redirect()->route('list');
    }

    public function Delete($id) {
        $delete = News::where('id' , '=' , $id)->first();
        $delete->delete();

        return redirect()->route('list');
    }

    public function Show($id) {
        $news = News::where('id','=',$id)->first();
        return view('show',compact('news'));
    }
}
