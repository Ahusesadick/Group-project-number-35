<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   
    function create(Request $request)
   {
       $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:users,email',
           //'email' => ['bail','required', 'string', 'email:dns', 'max:255', 'unique:users'],
           'RegNo'=>'required|max:255',
           'Programme'=>'required|max:255',
           'PhoneNo'=>'required|max:255',
           'Orgname'=>'required|max:255',
           'Orglocation'=>'required|max:255',
           'password'=>'required|min:5|max:30',
           'cpassword'=>'required|min:5|max:30|same:password'
       ]);
         
           $user = new User();
           $user->name = $request->name;
           $user->email = $request->email;
           $user->RegNo = $request->RegNo;
           $user->Programme = $request->Programme;
           $user->PhoneNo = $request->PhoneNo;
           $user->Orgname = $request->Orgname;
           $user->Orglocation = $request->Orglocation;
           $user->password = \Hash::make($request->password);
           $save = $user->save();
           
   
           if( $save ){
               return redirect()->back()->with('success','you are now registered successfully as Student');
   
           }else{
               return redirect()->back()->with('fall','something went wrong, failed to register');
           }
   }

   function check(Request $request){

    $request->validate([
        //'email' => ['bail','required', 'string', 'email:dns', 'max:255', 'exits:users'],
        //'email' => 'email:rfc,dns',
        //'e-mail'=>'required|email|exits:users,email',
        'email' => 'exists:mysql.users,email',
        'password'=>'required|min:5|max:30'
    ],[
        'email.exits'=>'This email does not exits in users table'
    ]);

    $creds = $request->only('email','password');

    if( Auth::guard('web')->attempt($creds)){
        return redirect()->route('user.home');

    }else{
        return redirect()->route('user.login')->with('fail','incorrect credentials');
    }
   }
   function logout(){
       Auth::guard('web')->logout();
       return redirect('/');
   }

}

