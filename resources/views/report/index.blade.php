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
	

	
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                       
                        <a href="{{ url('report.show') }}" class="py-4 p-2  pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300">Convert into PDF</a>
                        
                        <div class="py-8 table-responsive">
                            <table class="border-separate border border-blue-900 w-full text-black  text-xl  ">
                                <thead>
                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                        
                                        <th class="border border-black">Id</th>
                                       
                                        <th class="border border-black">Sname
                                        <th class="border border-black">RegNo</th>
                                        <th class="border border-black">programe</th>
                                        <th class="border border-black">date_reported</th>
                                        <th class="border border-black">date_finished</th>
                                        <th class="border border-black">day_attend</th>
                                        <th class="border border-black">day_missing</th>
                                        <th class="border border-black">Org_name</th>
                                        <th class="border border-black">Attitude toward field training</th>
                                        <th class="border border-black">organizes work well</th>
                                        <th class="border border-black">completes assigned tasks on time/punctual at work</th>
                                        <th class="border border-black">Has initiative/resourcefulness</th>
                                        <th class="border border-black">accuracy of work</th>
                                        <th class="border border-black">adapts to working conditions</th>
                                        <th class="border border-black">has ability to get along with others work</th>
                                        <th class="border border-black">Follows upon assignments</th>
                                        <th class="border border-black">ability to communicate with supervisor</th>
                                        <th class="border border-black">ability to apply theory in practice</th>
                                        <th class="border border-black">ability to judge</th>
                                        <th class="border border-black">Adherence to general code of conduct</th>
                                        <th class="border border-black">comments</th>
                                        <th class="border border-black">name</th>
                                        <th class="border border-black">designation</th>
                                        <th class="border border-black">contact</th>
                                        <th class="border border-black">email</th>
                                        <th class="border border-black">date</th>
                                        <th class="border border-black">signature</th>
                                        <th class="border border-black">Actions</th>
                                        <div>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($reports as $item)
                                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                        <td class="border border-black">{{ $loop->iteration }}</td>
                                        
                                        <td class="border border-black">{{ $item->Sname}}</td>
                                        <td class="border border-black">{{ $item->RegNo}}</td>
                                        <td class="border border-black">{{ $item->programe}}</td>
                                        <td class="border border-black">{{ $item->date_reported}}</td>
                                        <td class="border border-black">{{ $item->date_finished}}</td>
                                        <td class="border border-black">{{ $item->day_attend}}</td>
                                        <td class="border border-black">{{ $item->day_missing}}</td>
                                        <td class="border border-black">{{ $item->Org_name}}</td>
                                        <td class="border border-black">{{ $item->Attitude}}</td>
                                        <td class="border border-black">{{ $item->organizes}}</td>
                                        <td class="border border-black">{{ $item->panctual}}</td>
                                        <td class="border border-black">{{ $item->resourcefulness}}</td>
                                        <td class="border border-black">{{ $item->accuracy}}</td>
                                        <td class="border border-black">{{ $item->adapts}}</td>
                                        <td class="border border-black">{{ $item->has_ability_to_get_along_with_others_work}}</td>
                                        <td class="border border-black">{{ $item->Follows_upon_assignments}}</td>
                                        <td class="border border-black">{{ $item->ability_to_communicate_with_supervisor}}</td>
                                        <td class="border border-black">{{ $item->ability_to_apply_theory_in_practice}}</td>
                                        <td class="border border-black">{{ $item->ability_to_judge}}</td>
                                        <td class="border border-black">{{ $item->Adherence_to_general_code_of_conduct}}</td>
                                        <td class="border border-black">{{ $item->comments}}</td>
                                        <td class="border border-black">{{ $item->name}}</td>
                                        <td class="border border-black">{{ $item->designation}}</td>
                                        <td class="border border-black">{{ $item->contact}}</td>
                                        <td class="border border-black">{{ $item->email}}</td>
                                        <td class="border border-black">{{ $item->date}}</td>
                                        <td class="border border-black">{{ $item->signature}}</td>
 
                                        <td class="border border-black">
                                            <a href="{{ url('/report/' . $item->id) }}" title="View Supervisor"><button class="w-full p-2 pl-5 pr-5 bg-blue-900 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            
 
                                            <form method="POST" action="{{ url('/report' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="w-full p-2 pl-5 pr-5 bg-red-500 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
