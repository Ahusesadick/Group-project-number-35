<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use PDF;

class PostController extends Controller
{
  
    public function index()
    {
        $user = Auth::user();
        //$posts = post::all();
        $posts = post::where('user_id',$user->id)->orderBy('id','asc')->get();
        //dd($posts);
        return view ('post.index',compact('user','posts'));//->with('posts', $posts);

     
    }

    function get_posts()
    {
        $user = Auth::user();
     $posts = post::where('user_id',$user->id)->orderBy('id','asc')->limit(30)->get();
     //$posts = DB::table('posts')
         //->limit(5)
         //->get();
     return $posts;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_posts_to_html());
     return $pdf->stream();
    }

    function convert_posts_to_html()
    {
     $posts = $this->get_posts();
     $output = '
     <h3 align="center">Student report information</h3>
     <h6>supervisor name________________________</h6>
     <h6>Date___________________________________</h6>
     <h6>signature______________________________</h6>
     
      
     <table width="100%" style="border-collapse: collapse; border: 0px;">
     
      <tr>
    
    <th style="border: 1px solid; padding:12px;" width="30%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">RegNo</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Programme</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Date</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Description</th>
    
   </tr>
   
     ';  
     foreach($posts as $post)
     {
      $output .= '
      <tr>
      
       
       <td style="border: 1px solid; padding:12px;">'.Auth::guard('web')->user()->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.Auth::guard('web')->user()->RegNo.'</td>
       <td style="border: 1px solid; padding:12px;">'.Auth::guard('web')->user()->Programme.'</td>
       <td style="border: 1px solid; padding:12px;">'.$post->date.'</td>
       <td style="border: 1px solid; padding:12px;">'.$post->description.'</td>
       
      </tr>
      
      ';
      
     }
     
     $output .= '</table>';
     
     return $output;
    }

    
    public function create()
    {
        return view('dashboard.user.home');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'description'=>'required',
            //'name'=>'required',
            'date'=>'required',
            
        ]);

       // $input = $request->all();
        //Post::create($input);
        Post::create([

            'description' => request('description'),
           // 'name' => request('name'),
            'date' => request('date'),
            'user_id' => auth()->id() 
            
        ]);
        if( $request ){
            return redirect()->back()->with('success','Thanks your today report Addedd successfully!');
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


