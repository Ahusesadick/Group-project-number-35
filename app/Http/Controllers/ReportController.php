<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class ReportController extends Controller
{
  
    public function index()
    {
        $reports = report::all();
      return view ('report.index')->with('reports', $reports);
    }

    
    public function create()
    {
        return view('dashboard.supervisor.home');
    }

   
    public function store(Request $request)
    { 

        $request->validate([
            'Sname'=>'required',
            'programe'=>'required',
            'RegNo'=>'required',
            'date_reported'=>'required',
            'date_finished'=>'required',
            'Attitude'=>'required|not_in:0',
            'organizes'=>'required|not_in:0',
            'panctual'=>'required|not_in:0',
            'resourcefulness'=>'required|not_in:0',
            'accuracy'=>'required|not_in:0',
            'adapts'=>'required|not_in:0',
            'has_ability_to_get_along_with_others_work'=>'required|not_in:0',
            'Follows_upon_assignments'=>'required|not_in:0',
            'ability_to_communicate_with_supervisor'=>'required|not_in:0',
            'ability_to_apply_theory_in_practice'=>'required|not_in:0',
            'ability_to_judge'=>'required|not_in:0',
            'Adherence_to_general_code_of_conduct'=>'required|not_in:0',
            'comments'=>'required',
            'name'=>'required',
            'designation'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'date'=>'required',
            'signature'=>'required',
            
        ]);
       

        $input = $request->all();
        Report::create($input);
        if( $request ){
            return redirect()->back()->with('success','Thanks your report Addedd successfully!');
        }
    }

    
    public function show($id)
    {
        $report = Report::find($id);
        return view('report.show')->with('reports', $report);
    }


    function get_reports()
    {
        //$report = Report::find($id);
        $user = Auth::user();
        $reports = report::all();
        
     //$reports = Report::orderBy('id','asc')->limit(30)->get();
     //$users = DB::table('users')
       //  ->limit(10)
        // ->get();
     return $reports;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_reports_to_html());
     return $pdf->stream();
    }

    function convert_reports_to_html()
    {
     $reports = $this->get_reports();
     $output = '
     <h3 align="center">General evaluetion supervisor report </h3>
     <h6>supervisor name________________________</h6>
     <h6>Date___________________________________</h6>
     <h6>signature______________________________</h6>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      
   
   
     ';  
     foreach($reports as $item)
     {
      $output .= '
      
      <tr>
      
       <td style="border: 1px solid; padding:12px;"><u><b>student name</b></u><br><pre>'.$item->Sname.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>RegNo</b></u><br><pre>'.$item->RegNo.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>Programe</b></u><br><pre>'.$item->programe.'</td>
       </tr>
       <tr>
       <td style="border: 1px solid; padding:12px;"><u><b>Date reported</b></u><br><pre>'.$item->date_reported.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>Date finished</b></u><br><pre>'.$item->date_finished.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>Day attends</b></u><br><pre>'.$item->day_attend.'</td>
       
       </tr>
       <tr>
       <td style="border: 1px solid; padding:12px;"><u><b>Days missing</b></u><br><pre>'.$item->day_missing.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>organization name</b></u><br><pre>'.$item->Org_name.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>Attitude toward field training</b></u><br><pre>'.$item->Attitude.'</td>
       </tr>
       <tr>
       <td style="border: 1px solid; padding:12px;"><u><b>organizes work well</b></u><br><pre>'.$item->organizes.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>completes assigned tasks on time/punctual at work</b></u><br><pre>'.$item->panctual.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>Has initiative/resourcefulness</b></u><br><pre>'.$item->resourcefulness.'</td>
       </tr>
       <tr>
       <td style="border: 1px solid; padding:12px;"><u><b>accuracy of work</b></u><br><pre>'.$item->accuracy.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>adapts to working conditions</b></u><br><pre>'.$item->adapts.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>has ability to get along with others work</b></u><br><pre>'.$item->has_ability_to_get_along_with_others_work.'</td>
       </tr>
       <tr>
       <td style="border: 1px solid; padding:12px;"><u><b>Follows upon assignments</b></u><br><pre>'.$item->Follows_upon_assignments.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>ability to communicate with supervisor</b></u><br><pre>'.$item->ability_to_communicate_with_supervisor.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>ability to apply theory in practice</b></u><br><pre>'.$item->ability_to_apply_theory_in_practice.'</td>
       </tr>
       <tr>
       <td style="border: 1px solid; padding:12px;"><u><b>ability to judge</b></u><br><pre>'.$item->ability_to_judge.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>Adherence to general code of conduct</b></u><br><pre>'.$item->Adherence_to_general_code_of_conduct.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>comments</b></u><br><pre>'.$item->comments.'</td>
       </tr>
       <tr>
       <td style="border: 1px solid; padding:12px;"><u><b>name</b></u><br><pre>'.$item->name.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>designation</b></u><br><pre>'.$item->designation.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>contact</b></u><br><pre>'.$item->contact.'</td>
       </tr>
       <tr>
       <td style="border: 1px solid; padding:12px;"><u><b>email</b></u><br><pre>'.$item->email.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>date</b></u><br><pre>'.$item->date.'</td>
       <td style="border: 1px solid; padding:12px;"><u><b>signature</b></u><br><pre>'.$item->signature.'</td>
      
       </tr>
      <br><h3>Another report</h3><br>
      ';
      
     }
     
     $output .= '</table>';


     
     return $output;

     
    }

    
    public function edit($id)
    {
        $report = Report::find($id);
        return view('report.edit')->with('reports', $report);
    }

  
    public function update(Request $request, $id)
    {
        $report = Report::find($id);
        $input = $request->all();
        $report->update($input);
        return redirect('report')->with('flash_message', 'Contact Updated!');  
    }

   
    public function destroy($id)
    {
        Report::destroy($id);
        return redirect('report')->with('flash_message', 'Contact deleted!');  
    }
}