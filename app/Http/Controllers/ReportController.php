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
     
     
     <style>
     td, th {
       border: 1px solid black;
     }
     
     table {
       border-collapse: collapse;
       width: 100%;
     }
   
       td {
         font-size: large;
       }
     </style>

   
     ';  
     foreach($reports as $item)
     {
      $output .= '
      <br><h3 Align="center">Host Supervisors Evaluation of Student Performance</h3><br>
      <table>
      <tr>
       <td ><h6>Student name: <u>'.$item->Sname.'</u></h6></td>
       <td ><h6>RegNo: <u>'.$item->RegNo.'</u></h6></td>
      </tr>
       <tr>
       <td ><h6>Programe: <u>'.$item->programe.'</u></h6></td>
       <td ><h6>Date reported: <u>'.$item->date_reported.'</u></h6></td>
       
       </tr>
       <tr>
       <td ><h6>Date finished: <u>'.$item->date_finished.'</u></h6></td>
       <td ><h6>Day attends: <u>'.$item->day_attend.'</u></h6></td>
       
       </tr>
       <tr>
       <td ><h6>Days missing: <u>'.$item->day_missing.'</u></h6></td>
       <td ><h6>Organization name: <u>'.$item->Org_name.'</u></h6></td>
       
       </tr>
       </table>
       <br><h3 Align="center">General evaluation</h3><br>
       <table>
       <tr>
       <td ><h6>Attitude toward field training: <u>'.$item->Attitude.'</u></h6></td>
       </tr>
       <tr>
       <td ><h6>Organizes work well: <u>'.$item->organizes.'</u></h6></td>
       </tr>
       <tr>
       <td ><h6>Completes assigned tasks on time/punctual at work: <u>'.$item->panctual.'</u></h6></td>
       </tr>
       <tr>
       <td ><h6>Has initiative/resourcefulness: <u>'.$item->resourcefulness.'</u></h6></td>
       </tr>
       <tr>
       <td ><h6>Accuracy of work: <u>'.$item->accuracy.'</u></h6></td>
       </tr>
       <tr>
       <td ><h6>Adapts to working conditions: <u>'.$item->adapts.'</u></h6></td>
       </tr>
       <tr>
       <td ><h6>Has ability to get along with others work: <u>'.$item->has_ability_to_get_along_with_others_work.'</u></h6></td>
       </tr>
       <tr>
       <td ><h6>Follows upon assignments: <u>'.$item->Follows_upon_assignments.'</u></h6></td>
       </tr>
       <tr>
       <td ><h6>Ability to communicate with supervisor: <u>'.$item->ability_to_communicate_with_supervisor.'</u></h6></td>
       </tr>
       <tr>
       <td ><h6>Ability to apply theory in practice: <u>'.$item->ability_to_apply_theory_in_practice.'</u></h6></td>
       </tr>
       <tr>
       <td ><h6>Ability to judge: <u>'.$item->ability_to_judge.'</u></h6></td>
       </tr>
       <tr>
       <td ><h6>Adherence to general code of conduct: <u>'.$item->Adherence_to_general_code_of_conduct.'</u></h6></td>
       </tr>

       </table>
        
       <br><h3 Align="center">Additional Comments: (Remarks on students general performance and what should be done by the University?)</h3><br>
       <table>
       <tr>
       <td ><h6> <u>'.$item->comments.'</u></h6></td>
       </tr>
       </table>

       <table>
       <tr>
       <td ><h6>Host supervisor Name: <u>'.$item->name.'</u></h6></td>
       <td ><h6>Host supervisor Designation: <u>'.$item->designation.'</u></h6></td>
      </tr>
      <tr>
       <td ><h6>Contact: <u>'.$item->contact.'</u></h6></td>
       <td ><h6>Email: <u>'.$item->email.'</u></h6></td>
      </tr>
      <tr>
       <td ><h6>Date: <u>'.$item->date.'</u></h6></td>
       <td ><h6>Signature: <u>'.$item->signature.'</u></h6></td>
      </tr>

       </table>
       <br><h3 Align="center">Thank you very much for being a good supervisor in providing this valuable practical training to our students. We look forward to having stronger relationship.</h3><br>
      
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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