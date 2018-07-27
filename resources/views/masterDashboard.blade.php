@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($loanDetails_request as $row)
        <tr>
            <td>{{$row->user_id}}</td>
            <td>{{$row->loan_amount}}</td>
            <td>{{$row->loan_duration}}</td>
            <td>{{$row->loan_reason}}</td>
            <td>
                <button type="button" class="btn btn-primary">View</button>
                <button type="button" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
    @endforeach
</div>

<div class="container">
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <td>User ID</td>
                <td>Amount</td>
                <td>Duration</td>
                <td>Reason</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($loanDetails_request as $row)
                <tr>
                    <td>{{$row->user_id}}</td>
                    <td>{{$row->loan_amount}}</td>
                    <td>{{$row->loan_duration}}</td>
                    <td>{{$row->loan_reason}}</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
</div>



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
