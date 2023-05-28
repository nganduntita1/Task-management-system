<!-- resources/views.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>

        <div class="navigation">
            <ul>
                <li>
                    <a href="{{ route('tasks.index') }}">Task List</a>
                </li>
                <li>
                    <a href="{{ route('tasks.create') }}">Create Task</a>
                </li>
            </ul>
        </div>

        <!-- Other content of the home page -->
    </div>
@endsection
