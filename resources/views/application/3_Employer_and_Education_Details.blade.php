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
        <div class="progress-bar bg-success " role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50% Complete</div>
    </div>
</div>


{{-- TODO need to add old value function for when validation redirect occurs :value="{{old('loan_amount')}}" --}}

<div class="container.fluid" style="height: 60px; background-color: #ffffff;">
</div>
    <div class="row">
        <div class="col-8 offset-2">
        <div class="card card-outline-secondary" style="border-style: none; ">
            <div class="card-header" style="border-style: none; background-color: #659267; color: white">
                <h5 class="mb-0">Employment and Education Details</h5>
            </div>
            <div class="card-body" style="background-color:#efebe4" >
                <form class="form needs-validation" method="post" action="/step3" novalidate>

                    @csrf

                    <!-------------------------------- Employment Details ----------------------------------->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Employment details</strong>
                    </div>

                    <div class="form-group row">
                        <label for="employer" class="col-lg-4 col-form-label form-control-label  text-right" style="padding-left: 0px;padding-right: 0px">Employer</label>
                        <div class="col-lg-5">
                            <select class="form-control" id="employer" name="employer" required>
                                <option value="">--Select--</option>
                                <option value="ABC Pty Ltd">ABC Pty Ltd</option>
                                <option value="123 Pty Ltd">123 Pty Ltd</option>
                                <option value="A Company">A Company</option>
                                <option value="B Company">B Company</option>
                            </select>
                            <div class="invalid-feedback">
                                Required.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="employment_status" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px">Employment status</label>
                        <div class="col-lg-5">
                            <select class="form-control" id="employment_status" name="employment_status" required>
                                <option value="">--Select--</option>
                                <option value="Full-time">Full-time</option>
                                <option value="Part-time">Part-time</option>
                                <option value="Contractor">Contractor</option>
                                <option value="Casual">Casual</option>
                            </select>
                            <div class="invalid-feedback">
                                Required.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="job_title" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px">Job title</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" id="job_title" name="job_title" required>
                            <div class="invalid-feedback">
                                Required.
                            </div>
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="employment_duration" class="col-lg-4 col-form-label form-control-label  text-right" style="padding-left: 0px;padding-right: 0px">Time with employer</label>
                        <div class="col-lg-5">
                            <select class="form-control" id="employment_duration" name="employment_duration" required>
                                <option value="">--Select--</option>
                                <option value="0 months to 6 months">0 months to 6 months</option>
                                <option value="6 months to 1 year">6 months to 1 year</option>
                                <option value="1 year to 3 years">1 year to 3 years</option>
                                <option value="3 years to 5 years">3 years to 5 years</option>
                                <option value="Greater than 5 years">Greater than 5 years</option>
                            </select>
                            <div class="invalid-feedback">
                                Required.
                            </div>
                        </div>
                    </div>


                    <!-------------------------------- Education Details ----------------------------------->
                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Education details</strong>
                    </div>

                    <div class="form-group row">
                        <label for="education_completed" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px">Highest level of education completed</label>
                        <div class="col-lg-5">
                            <select class="form-control" id="education_completed" name="education_completed" required>
                                <option value="">--Select--</option>
                                <option value="Higher School Certificate">Higher School Certificate</option>
                                <option value="Certification IV or equivalent">Certification IV or equivalent</option>
                                <option value="Undergraduate Degree">Undergraduate Degree</option>
                                <option value="Postgraduate Degree">Postgraduate Degree</option>
                            </select>
                            <div class="invalid-feedback">
                                Required.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="currently_studying" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px; padding-top: 0px">Are you currently studying?</label>
                        <div class="col-lg-5">
                            <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons" >
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="currently_studying" id="option1" onchange="addAdditionalStudies()"  />Yes</label>
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="currently_studying" id="option2" onchange="removeAdditionalStudies()"  />No</label>
                            </div>
                        </div>
                    </div>

                    <div id="additionalStudies_parent" class="mb-3">
                        <!--placeholder for additional studies-->
                    </div>


                    <div class="form-group row justify-content-center mt-4">
                        <button class="btn btn-success btn-lg" type="submit"> Continue</button>
                    </div>

                    <div class="form-group row justify-content-center">
                        <a class="btn btn-outline-info" href="2_Personal_Details.blade.php" role="button">Previous Page</a>
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
<!--/.Footer-->





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

    // ---------------------  Currently Studying ------------------------------ //

    function addAdditionalStudies() {
        var newdiv = document.createElement("div");
        newdiv.innerHTML = "<div class=\"form-group row\" id=\"current_study_level\">\n" +
            "                        <label class=\"col-lg-4 col-form-label form-control-label text-right\" style=\"padding-left: 0px;padding-right: 0px\">What are you studying?</label>\n" +
            "                        <div class=\"col-lg-5\">\n" +
            "                            <select class=\"form-control\" id=\"current_study_level\" name=\"current_study_level\">\n" +
            "                                <option value=\"\">--Select--</option>\n" +
            "                                <option value=\"Higher School Certificate\">Higher School Certificate</option>\n" +
            "                                <option value=\"Certification IV or equivalent\">Certification IV or equivalent</option>\n" +
            "                                <option value=\"Undergraduate Degree\">Undergraduate Degree</option>\n" +
            "                                <option value=\"Postgraduate Degree\">Postgraduate Degree</option>\n" +
            "                            </select>\n" +
            "                        </div>\n" +
            "                    </div>";
        document.getElementById("additionalStudies_parent").appendChild(newdiv);
    }

    function removeAdditionalStudies() {
        var child = document.getElementById("current_study_level");
        child.parentNode.removeChild(child);
    }
</script>

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