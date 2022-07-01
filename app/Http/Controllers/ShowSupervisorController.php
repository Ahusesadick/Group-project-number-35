<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;

use Illuminate\Http\Request;
use PDF;

class ShowSupervisorController extends Controller
{
    public function supervisors()
    {
        $supervisors=Supervisor::all();
        return view ('showsupervisor',\compact('supervisors'));
    }


    function get_supervisors()
    {
        $supervisors=Supervisor::all();
     //$users = DB::table('users')
       //  ->limit(10)
        // ->get();
     return $supervisors;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_supervisors_to_html());
     return $pdf->stream();
    }

    function convert_supervisors_to_html()
    {
     $supervisors = $this->get_supervisors();
     $output = '
     <h3 align="center">List of supervisors</h3>
     
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    
    <th style="border: 1px solid; padding:12px;" width="30%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Email</th>
    <th style="border: 1px solid; padding:12px;" width="15%">PhoneNo</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Organization name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Organization location</th>
   
    
   </tr>
   
     ';  
     foreach($supervisors as $supervisor)
     {
      $output .= '
      <tr>
      
       <td style="border: 1px solid; padding:12px;">'.$supervisor->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supervisor->email.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supervisor->PhoneNo.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supervisor->Orgname.'</td>
       <td style="border: 1px solid; padding:12px;">'.$supervisor->Orglocation.'</td>
       
      </tr>
      
      ';
      
     }
     
     $output .= '</table>';
     
     return $output;
    }
}
