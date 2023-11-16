@extends('layouts.main')
@push('head')
    <title>Task Manager</title>
@endpush

@section('main-section')

<div class="container ">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">All Task</div>
        <a href="{{route("todo.create")}}" class="btn btn-primary btn-lg">Add Task</a>
    </div>

    <table class="table table-stripped bg-info">
        <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>
        @foreach ($todos as $todo)
        <tr valgin="middle">
            <td>{{$todo->name}}</td>
            <td>{{$todo->work}}</td>
            <td>{{$todo->duedate}}</td>
            <td>
                <a href="{{route("todo.edit",$todo->id)}}" class="btn btn-success btn-sm">Update</a>

                <a href="{{route("todo.delete",$todo->id)}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
        
    </table>
</div>

@endSection