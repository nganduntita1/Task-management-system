@extends('layouts.app')

@section('content')
   
            <div class="card bg-white rounded-lg shadow-lg">
                <h2 class="card-title">{{ $task->title }}</h2>
                <p class="card-description">{{ $task->description }}</p>
                <p class="card-due-date">Due Date: {{ \Carbon\Carbon::parse($task->due_date)->format('M d, Y') }}</p>
                <div class="card-buttons">
                  <a href="{{ route('tasks.edit', $task->id) }}" class="edit-button">Edit</a>
                  
                  <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="ml-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Delete</button>
                  </form>
                </div>
              </div>
   

    
      
@endsection


<style>
    .card {
  width: 350px;
  height: 700px;
  margin: 0 auto;
  background-color: #f1f1f1;
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
  background-color: #3490dc;
  color: #fff;
  padding: 8px 12px;
  border-radius: 4px;
  margin-right: 8px;
  text-decoration: none;
  height: 50px;
  width: 150px
}

.delete-button {
  background-color: red !important;
}



</style>

