<?php

namespace App\Http\Controllers;

use App\Mail\postMessege;
use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index(){

        $posts = posts::all();
        return view('post/index')->with('posts',$posts);
    }

    public function show($id){
        $post = posts::findOrFail($id);
        return view('post.show')->with('post',$post);
    }

    public function edit($id){
        $post = posts::findOrFail($id);
        return view('post.edit')->with('post',$post);
    }

    public function update( $id , Request $request){
        $data = $request->validate([
            'title' => 'required|min:3|max:255',
           'description'=> 'required|min:3|max:255',
           'content'=>'required|min:3',
        ]);

        $post = posts::findOrFail($id);
        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->content = $data['content'];
        if($post->save()){
            return redirect()->route('post.one' , $post->id);
        }
    }

    public function delete($id){
        $post = posts::findOrFail($id);
        if( $post->delete()){
            return redirect()->route('posts');
        }
    }

    public function create(){
        return view('post.create');
    }

    public function save(Request $request){

        $data = $request->validate([
            'title' => 'required|min:3|max:255',
            'description'=> 'required|min:3|max:255',
            'content'=>'required|min:3',
        ]);
        $posts = new posts();
        $posts->title = $data['title'];
        $posts->description = $data['description'];
        $posts->content = $data['content'];

       if($posts->save()){
           Mail::to('lightline001@gmail.com')->send(new postMessege($posts));
           return redirect()->route('posts')->with('success', 'Post uspeshno sozdan!');
       }

    }

}
