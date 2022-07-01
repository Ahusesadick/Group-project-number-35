<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use PDF;

class DynamicPDFController extends Controller
{
    function index()
    {
     $post_data = $this->get_post_data();
     return view('post_pdf')->with('post_data', $post_data);
    }

    function get_post_data()
    {
     $post_data = DB::table('posts')
         ->limit(10)
         ->get();
     return $post_data;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_post_data_to_html());
     return $pdf->stream();
    }

    function convert_post_data_to_html()
    {
     $post_data = $this->get_post_data();
     $output = '
     <h3 align="center">post Data</h3>
     <h6>supervisor name________________________</h6>
     <h6>Date________________________</h6>
     <h6>signature________________________</h6>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    
    <th style="border: 1px solid; padding:12px;" width="30%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Date</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Description</th>
    
   </tr>
   
     ';  
     foreach($post_data as $post)
     {
      $output .= '
      <tr>
      
       <td style="border: 1px solid; padding:12px;">'.$post->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$post->date.'</td>
       <td style="border: 1px solid; padding:12px;">'.$post->description.'</td>
       
      </tr>
      
      ';
      
     }
     
     $output .= '</table>';
     
     return $output;
    }
}
