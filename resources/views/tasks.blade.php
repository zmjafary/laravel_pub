@extends('layouts.app')
 
@section('content')
 
    <!-- Bootstrap Boilerplate... -->    
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                                
                    <!-- New Task Form -->
                    <form action="/task" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
            
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task" class="control-label"> <h1> Add Task </h1></label>
            
                            <div class="">
                                <input type="text" name="name" id="task-name" class="form-control full-width">
                            </div>
                        </div>
            
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary mt-4">
                                    <i class="fa fa-plus"></i> Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        
                @if (count($tasks) > 0)
                <!-- TODO: Current Tasks -->
                <div class="panel panel-primary mt-4">
                    <div class="panel-heading">
                        <h1>Current Tasks</h1>
                    </div>
        
                    <div class="panel-body">
                        <table class="table table-borderless">
        
                            <!-- Table Headings -->
                            <thead>
                                <tr><th>Task</th>
                                <th>&nbsp;</th>
                            </tr></thead>
        
                            <!-- Table Body -->
                            <tbody>
                                @foreach ($tasks as $task)                                    
                                <tr class="border-0">
                                    <!-- Task Name -->
                                    <td>
                                        <div>{{ $task->name }}</div>
                                    </td>
                                
                                    <!-- Delete Button -->
                                    <td style="text-align: right">
                                        <form action="/task/{{ $task->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                
                                            <button class="btn btn-danger">Delete Task</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection