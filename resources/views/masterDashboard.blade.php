@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        {{----------- LOAN DETAILS -------------}}
        <h3>User Details</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>User ID</td>
                <td>Email</td>
                <td>Password</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($user_details as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->password}}</td>
                    <td>
                        <button type="button" class="btn btn-primary">View</button>
                        <button type="button" class="btn btn-success">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{--/USER DETAILS--}}

        {{----------- LOAN DETAILS -------------}}
        <h3>Loan Details</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>User ID</td>
                <td>Amount</td>
                <td>Duration</td>
                <td>Reason</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($loan_details as $row)
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
            </tbody>
        </table>
        {{--/LOAN DETAILS--}}

    </div>

@endsection
