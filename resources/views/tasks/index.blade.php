
@extends('layouts.app')

@section('content')

 
        @if (Route::has('login'))   
            @auth
                <div class="grid grid-cols-2 md:grid-cols-2 gap-6 lg:gap-8" id="main">
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
 

   



@endsection

<style>

    #main{
        
        position: absolute;
        left: 30%;
        transform: translateX(-40%);
        
    }
    
        .card {
            position: absolute;
        left: 150%;
        transform: translateX(-110%);
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