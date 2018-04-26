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


{{-- TODO need to add old value function for when validation redirect occurs :value="{{old('loan_amount')}}" --}}
<div class="container.fluid" style="height: 60px; background-color: #ffffff;">
</div>

    <div class="row">
        <div class="col-8 offset-2">
        <div class="card card-outline-secondary" style="border-style: none; ">
            <div class="card-header" style="border-style: none; background-color: #659267; color: white">
                <h5 class="mb-0">Your Loan</h5>
            </div>
            <div class="card-body" style="background-color:#efebe4" >
                <form class="form needs-validation" method="post" action="/step1" novalidate>
                    @csrf

                    <!-------------------------------- Loan Details ----------------------------------->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Loan details</strong>
                    </div>

                    <!-- loan amount -->
                    <div class="form-group row">
                        <label for="loan_amount" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px">Loan amount</label>
                        <div class="col-lg-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" id="loan_amount" name="loan_amount" value="{{old('loan_amount')}}" required>
                                <div class="invalid-feedback">
                                    Required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- loan duration -->
                    <div class="form-group row">
                        <label for="loan_duration" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px">Loan duration</label>
                        <div class="col-lg-5">
                            <div class="input-group">

                                <input type="text" class="form-control" id="loan_duration" name="loan_duration" onchange="calculate()" placeholder="enter length of loan" required>
                                <div class="input-group-append">
                                    <select class="form-control btn btn-outline-secondary" id="loan_periodicity" name="loan_periodicity" onchange="calculate()" >
                                        <option value="months">Months</option>
                                        <option value="years">Years</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">
                                    Required.
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- loan reason -->
                    <div class="form-group row">
                        <label for="loan_reason" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px">Reason for loan</label>
                        <div class="col-lg-5">
                            <select class="form-control" id="loan_reason" name="loan_reason" required>
                                <option value="" >Please Select</option>
                                <optgroup label="Living, Utilities & Bills">
                                    <option value="Food">Food</option>
                                    <option value="Transport or petrol">Transport or petrol</option>
                                    <option value="Household bills">Household bills</option>
                                </optgroup>
                                <optgroup label="Home">
                                    <option value="Rent or rental bond">Rent or rental bond</option>
                                    <option value="Mortgage">Mortgage</option>
                                    <option value="Home appliances or furniture">Home appliances or furniture</option>
                                    <option value="Home renovations">Home renovations</option>
                                </optgroup>
                                <optgroup label="Vehicle">
                                    <option value="Item 1">Item 1</option>
                                    <option value="Item 2">Item 2</option>
                                    <option value="Item 3">Item 3</option>
                                </optgroup>
                            </select>
                            <div class="invalid-feedback">
                                Required.
                            </div>
                        </div>
                    </div>


                    <!-------------------------------- Repayment Details ----------------------------------->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Repayment details</strong>
                    </div>

                    <!-- Repayment table -->
                    <div class="row mt-4" >
                        <div class="col-10 offset-1">
                            <table class="table table-bordered" >
                                <thead class="">
                                <tr class="table-info">
                                    <th scope="col">Credit profile<a href="#exampleModal" data-toggle="modal" data-target="#exampleModal"><span class="fas fa-question-circle fa-xs" data-fa-transform="right-6 up-6" style="color:red"   ></span></a></th>
                                    <th scope="col" >Interest rate</th>
                                    <th scope="col">Comparison rate</th>
                                    <th scope="col">Estimated repayments</th>
                                </tr>
                                </thead>
                                <tbody >
                                <tr>
                                    <th scope="row" class="table-light">Excellent</th>
                                    <td class="table-light">9.0%</td>
                                    <td class="table-light">9.0%</td>
                                    <td class="table-light" id="excellent_repaymentAmount"></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="table-light">Good</th>
                                    <td class="table-light">12.0%</td>
                                    <td class="table-light">12.0%</td>
                                    <td class="table-light" id="good_repaymentAmount"></td>
                                </tr>
                                <tr >
                                    <th scope="row" class="table-light">Ok</th>
                                    <td class="table-light">16.0%</td>
                                    <td class="table-light">16.0%</td>
                                    <td class="table-light" id="ok_repaymentAmount" ></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group mb-3 col-lg-5 offset-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Repayment frequency</span>
                            </div>
                            <select class="form-control btn btn-md btn-outline-secondary" id="repayment_frequency" onchange="calculate()">
                                <option value="week">Weekly</option>
                                <option value="fortnight">Fortnightly</option>
                                <option value="month">Monthly</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 mb-3" style="color: grey">
                            <small> <i> Our loan calculator is for illustrative purposes only and does not constitute an offer of finance from Salt&Lime. As a responsible lender, Salt&Lime wants to find the best way to truly help customers. The loan amount, rate and repayment term you are offered may differ, depending on your personal circumstances and our credit assessment procedures.</i></small>
                        </div>
                    </div>



                    <!-------------------------------- Buttons ----------------------------------->
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-success btn-lg">Continue</button>
                        </div>
                    </div>

                </form>
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
<!--/.Footer-->

<script>





    window.calculate = function () {


        // find out what the repayment frequency is as requested by user
        loanDuration = document.getElementById("loan_duration");
        duration_period = document.getElementById("loan_periodicity");

        switch (duration_period.value) {
            case "months":
                durationMths = loanDuration.value;
                break;
            case "years":
                durationMths = loanDuration.value*12;
                break;
        }

        //alert(duration_period.value);
        //alert(durationMths);

        // find out what the repayment frequency is as requested by user
            repayment_frequence = document.getElementById("repayment_frequency");

            switch (repayment_frequence.value) {
                case "week":
                    pay_frequency = 52;
                    break;
                case "fortnight":
                    pay_frequency = 26;
                    break;
                case "month":
                    pay_frequency = 12;
                    break;
            }

        //need to calculate the repayments for the three rate bands
        excellentRate();
        goodRate();
        okRate();
    }


    function excellentRate() {

            // Excellent Rate

            // Look up the input and output elements in the document
            var amount = document.getElementById("loan_amount");
            var apr = 9;
            //var durationMths = document.getElementById("loanDuration");
            var total = document.getElementById("total");
            var totalinterest = document.getElementById("totalinterest");


            // Get the user's input from the input elements.
            // Assume it is all valid.  Convert interest from
            // a percentage to a decimal, and convert from an
            // annual rate to a monthly rate.  Convert payment
            // period in years to the number of monthly
            // payments.

            var principal = parseFloat(amount.value);
            var interest = parseFloat(apr) / 100 / 12;
            var numPayments = parseFloat(durationMths/12*pay_frequency);

            // Now compute the monthly payment figure.
            var x = Math.pow(1 + interest, numPayments); // Math.pow() computes powers
            var monthlyRepayment = (principal * x * interest) / (x - 1);

            //  If the result is a finite umber, the user's input was good and
            // we have meaningful results to display

            if (isFinite(monthlyRepayment)) {
                // Fill in the output fields, rounding to 2 decimal places
                excellent_repaymentAmount.innerHTML = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;
                //totalRepayments.innerHTML = (monthlyRepayment * numPayments).toFixed(2);
                //totalInterest.innerHTML = ((monthlyRepayment * numPayments) - principal).toFixed(2);


            } else {
                // Reslt was Not-a-Number or infinite, which means the input was
                // incomplete or invalid.  Clear any peviously displayed output.
                excellent_repaymentAmount.innterHTML = ""; // Erase the content of these elemts
                //totalRepayments.innerHTML = "";
                //totalInterest.innerHTML = "";

            }

    }

    function goodRate() {


        // Excellent Rate

        // Look up the input and output elements in the document
        var amount = document.getElementById("loan_amount");
        var apr = 12;
        //var durationMths = document.getElementById("loanDuration");
        var total = document.getElementById("total");
        var totalinterest = document.getElementById("totalinterest");


        // Get the user's input from the input elements.
        // Assume it is all valid.  Convert interest from
        // a percentage to a decimal, and convert from an
        // annual rate to a monthly rate.  Convert payment
        // period in years to the number of monthly
        // payments.

        var principal = parseFloat(amount.value);
        var interest = parseFloat(apr) / 100 / 12;
        var numPayments = parseFloat(durationMths/12*pay_frequency);


        // Now compute the monthly payment figure.
        var x = Math.pow(1 + interest, numPayments); // Math.pow() computes powers
        var monthlyRepayment = (principal * x * interest) / (x - 1);

        //  If the result is a finite umber, the user's input was good and
        // we have meaningful results to display

        if (isFinite(monthlyRepayment)) {
            // Fill in the output fields, rounding to 2 decimal places
            good_repaymentAmount.innerHTML = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;;
            //totalRepayments.innerHTML = (monthlyRepayment * numPayments).toFixed(2);
            //totalInterest.innerHTML = ((monthlyRepayment * numPayments) - principal).toFixed(2);


        } else {
            // Reslt was Not-a-Number or infinite, which means the input was
            // incomplete or invalid.  Clear any peviously displayed output.
            good_repaymentAmount.innterHTML = ""; // Erase the content of these elemts
            //totalRepayments.innerHTML = "";
            //totalInterest.innerHTML = "";

        }

    }

    function okRate() {

        // Excellent Rate

        // Look up the input and output elements in the document
        var amount = document.getElementById("loan_amount");
        var apr = 16;
        //var durationMths = document.getElementById("loanDuration");
        var total = document.getElementById("total");
        var totalinterest = document.getElementById("totalinterest");


        // Get the user's input from the input elements.
        // Assume it is all valid.  Convert interest from
        // a percentage to a decimal, and convert from an
        // annual rate to a monthly rate.  Convert payment
        // period in years to the number of monthly
        // payments.

        var principal = parseFloat(amount.value);
        var interest = parseFloat(apr) / 100 / 12;
        var numPayments = parseFloat(durationMths/12*pay_frequency);


        // Now compute the monthly payment figure.
        var x = Math.pow(1 + interest, numPayments); // Math.pow() computes powers
        var monthlyRepayment = (principal * x * interest) / (x - 1);

        //  If the result is a finite umber, the user's input was good and
        // we have meaningful results to display

        if (isFinite(monthlyRepayment)) {
            // Fill in the output fields, rounding to 2 decimal places
            ok_repaymentAmount.innerHTML = "$"+monthlyRepayment.toFixed(2) +" per " + repayment_frequence.value;;
            //totalRepayments.innerHTML = (monthlyRepayment * numPayments).toFixed(2);
            //totalInterest.innerHTML = ((monthlyRepayment * numPayments) - principal).toFixed(2);


        } else {
            // Reslt was Not-a-Number or infinite, which means the input was
            // incomplete or invalid.  Clear any peviously displayed output.
            ok_repaymentAmount.innterHTML = ""; // Erase the content of these elemts
            //totalRepayments.innerHTML = "";
            //totalInterest.innerHTML = "";

        }
    }




</script>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">What is a 'Credit Profile'</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <strong>Explanation text</strong>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet at autem,
                consequatur error nulla omnis quae quas quibusdam ullam veniam. Autem distinctio ipsum maiores nobis
                repellat veritatis vero.


            </div>
        </div>
    </div>
</div>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

</body>
</html>



<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>


<!----------- OLD FOOTER -------------

    <!--Footer--
    <footer class="page-footer font-small stylish-color-dark pt-4 mt-4" style="background-color: rgb(68,68,68); color: white">

        <!--Footer Links--
        <div class="container text-center text-md-left">

            <!-- Footer links --
            <div class="row text-center text-md-left mt-3 pb-3">

                <!--First column--
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Salt&Lime</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <!--/.First column--

                <hr class="w-100 clearfix d-md-none">

                <!--Second column--
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                    <p>[xxx]</p>
                    <p>[xxx]</p>
                    <p>[xxx]</p>
                    <p>[xxx]</p>
                </div>
                <!--/.Second column--

                <hr class="w-100 clearfix d-md-none">

                <!--Third column--
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                    <p>Privacy Policy</p>
                    <p>Terms & Conditions</p>
                    <p>Credit Guide</p>
                    <p>About Us</p>
                </div>
                <!--/.Third column--

                <hr class="w-100 clearfix d-md-none">

                <!--Fourth column--
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fa fa-home mr-3"></i> Sydney, NSW 2000</p>
                    <p><i class="fa fa-envelope mr-3"></i> info@saltandlime.com.au</p>
                    <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                </div>
                <!--/.Fourth column--

            </div>
            <!-- Footer links --

            <hr style="background-color: white">

            <div class="row py-3 d-flex align-items-center">

                <!--Grid column--
                <div class="col-12">

                    <!--Copyright--
                    <p class="text-center  grey-text">© 2018 saltandlime.com.au | ACN 619 815 833 | Australian Credit Licence Number 501633</p>
                    <!--/.Copyright-->

                </div>
                <!--Grid column--

            </div>

        </div>

    </footer>
    <!--/.Footer-->

