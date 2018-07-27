@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
            <td colspan="2">Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($tickets as $ticket)
            <tr>
                <td>{{$ticket->id}}</td>
                <td>{{$ticket->title}}</td>
                <td>{{$ticket->description}}</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
