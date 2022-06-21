<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'frsys') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-blue-100 h-screen antialiased leading-none font-sans">
	

	</div>
    <div id="app">
        <header class="bg-blue-900 py-6">
            
              
                <a href="#" class="flex py-4 px-2">
					<img src="{{ asset('images/1.jpg') }}" alt="Logo" class="h-30 w-20 " >
                  
                </a>
            
            <div class="container mx-auto flex justify-between items-center px-6 ">
                <div>
					
                    <a href="{{ url('/') }}" class="text-2xl  font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'FIELD REPORT SYSTEM IN HIGH LEARNING INSTITUTION') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('supervisor.login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('supervisor.register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::guard('supervisor')->user()->name }}</span>

                        <a href="{{ route('supervisor.logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('supervisor.logout') }}" method="post" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
            
        </header>
        

<div class="supervisor-form"></div>
    <div class="flex justify-center py-2 auto-rows-max   ">
        <div class="w-4/6 bg-blue-200 p-6 rounded-lg table-auto ">
             
            <h4 class="text-center text-2xl font-bold ">Host Supervisor's Evaluation of Student Performance</h4>
            <p class="text-xl text-black py-4"><b>Dear Supervisor:</b>Please fill in this form to the best of your knowledge, submit it,This form is confidential!</p>
            <form action="{{ url('report') }}" method="post"  class=" grid justify-items-stretch font-bold">
				@if(Session::has('success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    {{ Session::get('success') }}
                </div>
                @endif
	        {!! csrf_field() !!}
            <table class="min-w-full divide-y divide-gray-200">
            <tr>
	        <td class="border border-black">student's name:<input class="float-right rounded-lg w-3/6 p-2.5 form-input  @error('name')  border-red-500 @enderror"  type="text" name="Sname"  placeholder="student's name"> @error('Sname')
				<p class="text-red-500 text-xs italic mt-4">
					{{ $message }}
				</p>
				@enderror</td>
	        <td class="border border-black">student's REG.No:<input class="float-right rounded-lg w-3/6 p-2.5" type="text" name="RegNo"  placeholder="student's REG.No"></td></tr>
	        <tr><td class="border border-black"><br> students program:<input class="float-right rounded-lg w-3/6 p-2.5"  type="text" name="programe"  placeholder="students program"></td>
		    <td class="border border-black">Date reported<input class="float-right rounded-lg w-3/6 p-2.5"  type="date" name="date_reported"  placeholder="date reported for field work"></td>
	        <tr ><td class="border border-black"> Date finished<input class="float-right rounded-lg w-3/6 p-2.5" type="date" name="date_finished"  placeholder="Date finished field work:"></td>
	        <td class="border border-black">number of days attended to field place:<input class="float-right rounded-lg w-3/6 p-2.5" type="numeric" name="day_attend"  placeholder="number of days attended "><br></td></tr>
	        <tr ><td class="border border-black">number of days absent from field<input class="float-right rounded-lg w-3/6 p-2.5" type="text" name="day_missing"  placeholder="number of days absent from field"></td>
	        <td class="border border-black">organization's name<input class="float-right rounded-lg w-3/6 p-2.5" type="text" name="Org_name"  placeholder="organization's name"><br></td></tr>	
	        </tr>
            </table>

            <h4 class="text-2xl font-bold text-center py-4"><u>General Evaluation</u></h4>
            <table class="min-w-full divide-y divide-gray-200 ">
	        <tr >
	        <td class="border border-blue-900"><label>Attitude toward field training</label>
	    <select name="Attitude" class="w-1/2 float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
			
				Host supervisor name:<input placeholder="name" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="name">
		
		</td>
		<td class="border border-blue-900">
			
				host supervisor designation:<input placeholder="designation" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="designation"> 
			
		</td>
	</tr>
	<tr >
		<td class="border border-blue-900">
		
				contact:<input placeholder="contact" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="contact">
			
		</td>
		<td class="border border-blue-900">
			
				website/email:<input placeholder="email/website" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="email">
			
		</td>
	</tr>
	<tr>
		<td class="border border-blue-900">
		
				date:<input placeholder="date" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="date">
		
		</td>
		<td class="border border-blue-900">
			
				signature:<input placeholder="signature" class="float-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-3/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="signature">
			
		</td>
	</tr>
</table>
	<br>
		<td><button type="submit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button></td>
			
</form>

       <p class="text-xl italic  font-bold">Thank you very much for being a good supervisor in providing this valuable practical training <br>to our students. We look forward to having stronger relationship.</p>



         </div>
    </div> 
</div>
    

    <footer >
        
    </footer>
</body>
</html>
