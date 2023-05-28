

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        

        <!-- Styles -->
        
    </head>
    @extends('layouts.app')

    @section('content')
    <body class="antialiased">
                        <img alt="Primeblocks React logo" src="https://static.vecteezy.com/system/resources/previews/001/879/507/original/fill-out-surveys-and-examinations-choose-answers-and-questions-choice-application-checkbox-list-of-tasks-illustration-concept-for-landing-page-web-ui-banner-poster-template-background-free-vector.jpg" class="content-header-image w-100%" >
                    
            

                
            

           
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 bg-white b-23">
                    @auth
                       
                        <a href="{{ url('/tasks/create') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Create Tasks</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8 ml-20 main">
                <div class="flex justify-center h-50 w-50">
                   
                      
                </div>

                <div class="mt-16 b-100 ml-20 ">
                    {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8"> --}}
                    @if (Route::has('login'))   
                        @auth
                            <div class="grid grid-cols-2 md:grid-cols-2 gap-6 lg:gap-8 ">
                                @foreach ($tasks as $task)
                                    
                                    <div class="card bg-white rounded-lg shadow-lg">
                                        <h2 class="card-title">{{ $task->title }}</h2>
                                        <p class="card-description">{{ $task->description }}</p>
                                        <p class="card-due-date">Due Date: {{ \Carbon\Carbon::parse($task->due_date)->format('M d, Y') }}</p>
                                        <div class="card-buttons">
                                          <a href="{{ route('tasks.show', $task->id) }}" class="edit-button">View Task</a>
                                          
                                          
                                        </div>
                                      </div>
                                @endforeach
                            </div>
                        @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login To Create Tasks</a>
                        @endauth

                    @endif
                </div>

               
            </div>
        </div>
    </body>
    @endsection
</html>



<style>

.main{
    
    margin-right: 100px !important;
}

    .card {
  width: 450px;
  height: 300px;
  /* margin: 0 auto; */
  background-color: #ffff;
  border-radius: 8px;
  padding: 16px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.card-title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 12px;
}

.card-description {
  font-size: 16px;
  margin-bottom: 12px;
}

.card-due-date {
  font-size: 14px;
  margin-bottom: 12px;
}

.card-buttons {
  display: flex;
}

.edit-button,
.delete-button {
  background-color: #8ea9fb;
  color: #fff;
  padding: 8px 12px;
  border-radius: 4px;
  margin-right: 8px;
  text-decoration: none;
  height: 50px;
  width: 150px
  text-align: center;
}

.delete-button {
  background-color: red !important;
}



</style>

