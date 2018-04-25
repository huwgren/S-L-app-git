@extends('application.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        Step 2
                    </div>

                    <div class="card-body">
                        <form method="post" action="/step2">

                            @csrf

                            <div class="form-group row">
                                <label for="employer" class="col-sm-2 col-form-label">Employer:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="employer" placeholder="employer" name="employer">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="salary" class="col-sm-2 col-form-label">Salary:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="salary" placeholder="salary" name="salary">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
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
