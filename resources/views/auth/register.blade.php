<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome Icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <title>Salt&Lime | A free financial wellbeing employee benefit</title>

    <style>


        .spacer-top{
            height: 10px;
            background-color: #94c395;
        }

        .spacer-bottom{
            height: 60px;
        }

        .application-header{
            height: 80px;
            background-color: #ffffff;
        }

        .panel-left{
            margin-top: 10px;
        }
        .panel-right{
            margin-top: 16px;
            background-color: rgb(240,240,240);
            border-radius: 5px;

        }

        .telephone-text{
            color: #1e7e34;
            margin: 0px;
        }


        .agreement{
            padding-top: 18px;
            font-size: 14px;
        }

        .info-true{
            font-size: 14px;
        }
    </style>



</head>



<body>

<div class="container.fluid spacer-top">
</div>

<div class="container.fluid application-header" >

    <div class="row">
        <div class="col-3 ml-5 panel-left">
            <img class="img" src="/images/SL_LOGO_OLIVE_RGB.png"  height="60px">
        </div>
        <div class="col-auto  d-flex ml-auto mr-5 panel-right">
            <div>
                Need help? Call us
                <div class="telephone-text">
                    <i class="fas fa-phone" data-fa-transform="flip-h"></i> <strong>1300 123 456</strong>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Progress Bar -->
<div class="container.fluid">
    <div class="progress" style="height: 20px; border-top: lightgrey; border-top-style: solid">
        <div class="progress-bar bg-success " role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10% Complete</div>
    </div>
</div>



<div class="container.fluid" style="height: 60px; background-color: #ffffff;">
</div>


    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header" style="border-style: none; background-color: #659267; color: white"><h5 class="mb-0">Register to get started</h5></div>

                    <div class="card-body" style="background-color:#efebe4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">
                                        {{ __('    Next    ') }}
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-sm-8 text-center">
                                    By creating an account you agree to the <a href="">Terms & Conditions</a> and <a href="">Privacy Policy</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container.fluid spacer-bottom">
</div>



<!--Footer-->
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4" style="background-color: rgb(68,68,68); color: white">

    <!--Footer Links-->
    <div class="container text-center text-md-left">


        <!-- Footer links -->

        <hr style="background-color: white">

        <div class="row py-3 d-flex align-items-center">

            <!--Grid column-->
            <div class="col-12">

                <!--Copyright-->
                <p class="text-center  grey-text">© 2018 saltandlime.com.au | ACN 619 815 833 | Australian Credit Licence Number 501633</p>
                <!--/.Copyright-->

            </div>
            <!--Grid column-->

        </div>

    </div>

</footer>

</body>
</html>
