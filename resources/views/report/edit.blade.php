@extends('report.layout')
@section('content')
 
<div class="supervisor-form"></div>
    <div class="flex justify-center py-2 auto-rows-max   ">
        <div class="w-4/6 bg-blue-200 p-6 rounded-lg table-auto ">
     

    <form action="{{ url('report/'  .$reports->id) }}" method="post"  class=" grid justify-items-stretch font-bold">
        {!! csrf_field() !!}
        @method("PATCH")
    <table class="min-w-full divide-y divide-gray-200">
    <tr>
        
        <td class="border border-black">student's name:<input class="float-right rounded-lg w-3/6 p-2.5"  type="text" name="Sname" value="{{ $reports->Sname }}" placeholder="student's name"></td>
        <td class="border border-black">student's REG.No:<input class="float-right rounded-lg w-3/6 p-2.5" type="text" name="RegNo" value="{{ $reports->RegNo }}" placeholder="student's REG.No"></td></tr>
        <tr><td class="border border-black"><br> students program:<input class="float-right rounded-lg w-3/6 p-2.5"  type="text" name="programe" value="{{ $reports->programe }}" placeholder="students program"></td>
            <td class="border border-black">Date reported<input class="float-right rounded-lg w-3/6 p-2.5"  type="date" name="date_reported" value="{{ $reports->date_reported }}" placeholder="date reported for field work"></td>
        <tr ><td class="border border-black"> Date finished<input class="float-right rounded-lg w-3/6 p-2.5" type="date" name="date_finished" value="{{ $reports->date_finished }}" placeholder="Date finished field work:"></td>
        <td class="border border-black">number of days attended to field place:<input class="float-right rounded-lg w-3/6 p-2.5" type="numeric" name="day_attend" value="{{ $reports->day_attend }}" placeholder="number of days attended "><br></td></tr>
        <tr ><td class="border border-black">number of days absent from field<input class="float-right rounded-lg w-3/6 p-2.5" type="text" name="day_missing" value="{{ $reports->day_missing }}" placeholder="number of days absent from field"></td>
        <td class="border border-black">organization's name<input class="float-right rounded-lg w-3/6 p-2.5" type="text" name="Org_name" value="{{ $reports->Org_name }}" placeholder="organization's name"><br></td></tr>	
        </tr>
    </table>
    
              <h4 class="text-2xl font-bold text-center py-4"><u>General Evaluation</u></h4>
    <table class="min-w-full divide-y divide-gray-200 ">
        <tr >
        <td class="border border-blue-900"><label>Attitude toward field training</label>
        <select name="Attitude"  class="w-1/2 float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td>
                <td class="border border-blue-900"><label>organizes work well</label>
            <select name="organizes" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td>
            </tr>
            <tr ><td class="border border-blue-900"><label>completes assigned tasks on time/punctual at work</label>
            <select name="panctual" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td>
            
            <td class="border border-blue-900"><label>Has initiative/resourcefulness</label>
            <select name="resourcefulness" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td></tr>
            
            <tr ><td class="border border-blue-900"><label>accuracy of work</label>
            <select name="accuracy" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td>
            
            <td class="border border-blue-900"><label>adapts to working conditions</label>
            <select name="adapts" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td></tr>
            
            <tr ><td class="border border-blue-900"><label>Has ability to get along with others work</label>
            <select name="has_ability_to_get_along_with_others_work" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td>
            
            <td class="border border-blue-900"><label>Follows upon assignments</label>
            <select name="Follows_upon_assignments" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td></tr>
            
            <tr ><td class="border border-blue-900"><label>Has ability to communicate with supervisor</label>
            <select name="ability_to_communicate_with_supervisor" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td>
            
            <td class="border border-blue-900"><label>Has ability to apply theory in practice</label>
            
            <select name="ability_to_apply_theory_in_practice" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td></tr>
            <tr ><td class="border border-blue-900"><label>Has ability to judge or take decisions</label>
            <select name="ability_to_judge" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td>
            
            <td class="border border-blue-900"><label>Adherence to general code of conduct</label>
            <select name="Adherence_to_general_code_of_conduct" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="choose">choose</option>
                <option value="excellent">excellent</option>
                <option value="very good">very good</option>
                <option value="good">good</option>
                <option value="fair">fair</option>
                <option value="poor">poor</option>
            </select></td><tr><td></td></tr></tr>
    </table>
    
    <p class="py-4"><b>Additional Comments: (Remarks on student's general performance and what should be done by the University?)</b></p>
     
    <textarea name="comments" id="message" rows="4" class="float-right  block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg py-4" placeholder="Your message"></textarea>
    <br>
    
    <table class="min-w-full divide-y divide-gray-200 ">	
        <tr >
            <td class=" border border-blue-900">
                
                    Host supervisor name:<input placeholder="name" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="name" value="{{ $reports->name }}">
            
            </td>
            <td class="border border-blue-900">
                
                    host supervisor designation:<input placeholder="designation" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="designation" value="{{ $reports->designation }}"> 
                
            </td>
        </tr>
        <tr >
            <td class="border border-blue-900">
            
                    contact:<input placeholder="contact" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="contact" value="{{ $reports->contact }}">
                
            </td>
            <td class="border border-blue-900">
                
                    website/email:<input placeholder="email/website" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="email" value="{{ $reports->email }}">
                
            </td>
        </tr>
        <tr>
            <td class="border border-blue-900">
            
                    date:<input placeholder="date" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="date" value="{{ $reports->date }}">
            
            </td>
            <td class="border border-blue-900">
                
                    signature:<input placeholder="signature" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="signature" value="{{ $reports->signature }}">
                
            </td>
        </tr>
    </table>
        <br>
            <td><button type="submit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button></td>
                
    </form>
   
  </div>
</div>
 
@endsection