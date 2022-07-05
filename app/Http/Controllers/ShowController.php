<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Exports\UsersExport;

use Illuminate\Http\Request;
use PDF;
use Maatwebsite\Excel\Facades\Excel;


//use Maatwebsite\Excel\Concerns\FromView;



class ShowController extends Controller
{
    public function users()
    {
        $users=User::all();
        return view ('showw',\compact('users'));
    }

    public function export(){
      $users = User::all();
      return Excel::download(new UsersExport($users),'users.xlsx');
      //return Excel::download(new UsersExport, 'users.xlsx');
  }

   

    function get_users()
    {
        $users=User::all();
     //$users = DB::table('users')
       //  ->limit(10)
        // ->get();
     return $users;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_users_to_html());
     return $pdf->stream();
    }

    function convert_users_to_html()
    {
     $users = $this->get_users();
     $output = '
     <h3 align="center">List of students</h3>
     
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    
    <th style="border: 1px solid; padding:12px;" width="30%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Email</th>
    <th style="border: 1px solid; padding:12px;" width="15%">RegNo</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Programme</th>
    <th style="border: 1px solid; padding:12px;" width="15%">PhoneNo</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Org name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Org location</th>
   
    
   </tr>
   
     ';  
     foreach($users as $user)
     {
      $output .= '
      <tr>
      
       <td style="border: 1px solid; padding:12px;">'.$user->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$user->email.'</td>
       <td style="border: 1px solid; padding:12px;">'.$user->RegNo.'</td>
       <td style="border: 1px solid; padding:12px;">'.$user->Programme.'</td>
       <td style="border: 1px solid; padding:12px;">'.$user->PhoneNo.'</td>
       <td style="border: 1px solid; padding:12px;">'.$user->Orgname.'</td>
       <td style="border: 1px solid; padding:12px;">'.$user->Orglocation.'</td>
       
      </tr>
      
      ';
      
     }
     
     $output .= '</table>';
     
     return $output;
    }
}
