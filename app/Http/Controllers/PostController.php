<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  
    public function index()
    {
        $posts = post::all();
      return view ('post.index')->with('posts', $posts);
    }

    
    public function create()
    {
        return view('dashboard.user.home');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'description'=>'required|max:255|regex:/^[a-zA-Z]+$/',
            
        ]);

        $input = $request->all();
        Post::create($input);
        if( $request ){
            return redirect()->back()->with('success','report Addedd!');
        }
        
         
    }

    
    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show')->with('posts', $post);
    }

    
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit')->with('posts', $post);
    }

  
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $input = $request->all();
        $post->update($input);
        return redirect('post')->with('flash_message', 'Contact Updated!');  
    }

   
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('post')->with('flash_message', 'Contact deleted!');  
    }
}


