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
     $posts = post::where('user_id',$user->id)->orderBy('id','asc')->limit(20)->get();
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
     
     
     <h1 align="center">FIELD TRAINING REPORT</h1>
     <h1>NAME:'.Auth::guard('web')->user()->name.'<br>REG NUMER:'.Auth::guard('web')->user()->RegNo.'<br>PROGRAMME:'.Auth::guard('web')->user()->Programme.'</h1>
     
     
     
     <br><br><br><br><br><br>
     
     <h1>NAME OF THE HOST INSTITUTION:'.Auth::guard('web')->user()->Orgname.'<br><br>ADDRESS:'.Auth::guard('web')->user()->Orglocation.'</h1>
     

     <br><br><br><br><br><br>
     <h1>INSTITUTION FIELD SUPERVISOR:</h1>
     <h1>NAME:______________________________</h1>
     <h1>SIGNATURE:_________________________</h1>
     <h1>DATE:______________________________</h1>

     <br><br><br><br><br><br>
     <style>
td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 70px;
}

th {
    font-size: xx-large;
  }

td {
    height: 50px;
  }

  td {
    font-size: xx-large;
  }
</style>
     <table >
     
      
      
      
      
     
    <tr>
    <th >Description</th>
    <th >Date</th>
    
    
   </tr>
   
     ';  
     foreach($posts as $post)
     {
        
      $output .= '

      <tr>
      <td >'.$post->description.'</td>
      <td >'.$post->date.'</td>
      </tr>
    
      ';
      
     }
     $output .= '
     <br>
     <table>
     <tr>
     <h2>Stamp and signature:___________</h2>
     </tr>
     </table>
     ';
     
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


