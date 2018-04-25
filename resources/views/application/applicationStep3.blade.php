@extends('application.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        Step 3
                    </div>

                    <div class="card-body">
                        <form method="post" action="/step3">

                            @csrf

                            <div class="form-group row">
                                <label for="income" class="col-sm-2 col-form-label">Income:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="income" placeholder="income" name="income">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="expenses" class="col-sm-2 col-form-label">Expenses:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="expenses" placeholder="expenses" name="expenses">
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
