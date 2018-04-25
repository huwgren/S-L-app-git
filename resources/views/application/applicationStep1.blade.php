@extends('application.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">

                    <div class="card-header">
                        Step 1
                    </div>

                    <div class="card-body">
                        <form method="post" action="/step1">

                            @csrf

                            <div class="form-group row ">
                                <label for="first_name" class="col-sm-3 col-form-label text-right">First name:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="first_name" placeholder="first name" name="first_name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name" class="col-sm-3 col-form-label text-right">Last name:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="last_name" placeholder="last name" name="last_name">
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
