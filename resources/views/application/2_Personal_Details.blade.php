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
        <div class="progress-bar bg-success " role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25% Complete</div>
    </div>
</div>


{{-- TODO need to add old value function for when validation redirect occurs :value="{{old('loan_amount')}}" --}}

<div class="container.fluid" style="height: 60px; background-color: #ffffff;">
</div>

    <div class="row">
        <div class="col-8 offset-2">
        <div class="card card-outline-secondary" style="border-style: none; ">
            <div class="card-header" style="border-style: none; background-color: #659267; color: white">
                <h5 class="mb-0">Personal Details</h5>
            </div>
            <div class="card-body" style="background-color:#efebe4" >
                <form class="form needs-validation" method="post" action="/step2" novalidate>

                    @csrf

                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Personal Details</strong>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-lg-4 col-form-label form-control-label  text-right" style="padding-left: 0px;padding-right: 0px">Title</label>
                        <div class="col-lg-5">
                            <select class="form-control" id="title" name="title" value="{{old('title')}}" required>
                                <option value="" >Please Select</option>
                                <option value="Mr">Mr</option>
                                <option value="Ms">Ms</option>
                                <option value="[xx]">[xx]</option>
                            </select>
                            <div class="invalid-feedback">
                                Required.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="first_name" class="col-lg-4 col-form-label form-control-label  text-right" style="padding-left: 0px;padding-right: 0px">First name</label>
                        <div class="col-lg-5">
                            <input id="firstName" name="first_name" value="{{old('first_name')}}" class="form-control" type="text" required>
                            <div class="invalid-feedback">
                                Required.
                            </div>
                        </div>


                    </div>
                    <div class="form-group row">
                        <label for="last_name" class="col-lg-4 col-form-label form-control-label  text-right" style="padding-left: 0px;padding-right: 0px">Last name</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" id="last_name" name="last_name" value="{{old('last_name')}}" required>
                            <div class="invalid-feedback">
                                Please provide your last name.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="DOB" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px">Date of birth</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" id="DOB" name="DOB" value="{{old('DOB')}}" placeholder="DD/MM/YYYY" >
                        </div>
                        <div class="invalid-feedback">
                            Please provide your date of birth.
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="drivers_licence_number" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px">Drivers Licence Number</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" id="drivers_licence_number" name="drivers_licence_number" value="{{old('drivers_licence_number')}}" required>
                            <div class="invalid-feedback">
                                Please provide your drivers license number.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mobile_number" class="col-lg-4 col-form-label form-control-label  text-right" style="padding-left: 0px;padding-right: 0px">Mobile number</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" id="mobile_number" name="mobile_number" value="{{old('mobile_number')}}" required>
                            <div class="invalid-feedback">
                                Please provide your mobile number.
                            </div>
                        </div>
                    </div>

                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Address</strong>
                    </div>

                    <div class="form-group row">
                        <label for="current_address" class="col-lg-4 col-form-label form-control-label  text-right" style="padding-left: 0px;padding-right: 0px">Address</label>
                        <div class="col-lg-5">
                            <!--<div id="locationField">-->
                                <input class="form-control places-autocomplete" id="autocomplete" name="current_address" value="{{old('current_address')}}" placeholder="Enter your address"  onFocus="geolocate()" type="text" required>
                            <!--</div>-->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="time_at_address" class="col-lg-4 col-form-label form-control-label  text-right" style="padding-left: 0px;padding-right: 0px">Time at current address</label>
                        <div class="col-lg-5">
                            <select class="form-control" id="time_at_address" name="time_at_address" value="{{old('time_at_address')}}" onchange="previousAddress()" required>
                                <option value="" >Please Select</option>
                                <option value="6">0 to 6 months</option>
                                <option value="12">6 to 12 months</option>
                                <option value="24">1 to 2 years</option>
                                <option value="36">2 to 3 years</option>
                                <option value="48">Greater than 3 years</option>
                            </select>
                            <div class="invalid-feedback">
                                Required.
                            </div>
                        </div>
                    </div>

                    <div id="previousAddress_parent">

                    </div>


                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Other Details</strong>
                    </div>

                    <div class="form-group row">
                        <label for="residential_status" class="col-lg-4 col-form-label form-control-label  text-right" style="padding-left: 0px;padding-right: 0px">Residential status</label>
                        <div class="col-lg-5">
                            <select class="form-control" id="residential_status" name="residential_status" value="{{old('residential_status')}}" required>
                                <option value="" >Please Select</option>
                                <option value="Own (with mortgage)">Own (with mortgage)</option>
                                <option value="Own (outright)">Own (outright)</option>
                                <option value="Rent">Rent</option>
                                <option value="[xx]">[xx]</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="citizen_status" class="col-lg-4 col-form-label form-control-label  text-right" style="padding-left: 0px;padding-right: 0px">Citizenship status</label>
                        <div class="col-lg-5">
                            <select class="form-control" id="citizen_status" name="citizen_status" value="{{old('citizen_status')}}" required>
                                <option value="" >Please Select</option>
                                <option value="[x1]">[x1]</option>
                                <option value="[x2]">[x2]</option>
                                <option value="[x3]">[x3]</option>
                                <option value="[x4]">[x4]</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="martial_status" class="col-lg-4 col-form-label form-control-label  text-right" style="padding-left: 0px;padding-right: 0px">Martial Status</label>
                        <div class="col-lg-5">
                            <select class="form-control" id="martial_status" name="martial_status" value="{{old('martial_status')}}" required>
                                <option value="" >Please Select</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="[xx]">[xx]</option>
                            </select>
                        </div>
                    </div>

                    <!-------------------------------- Buttons ----------------------------------->
                    <div class="form-group row justify-content-center mt-4">
                        <button class="btn btn-success btn-lg" type="submit"> Continue</button>
                    </div>

                    <div class="form-group row justify-content-center">
                        <a class="btn btn-outline-info" href="1_Loan_Details.blade.php" role="button">Previous Page</a>
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


<!--------- Previous Address Requirement --------------->
<script>
    // if the user has been at their current address less than 2 years then request previous address aswell
    function previousAddress() {

        var months_at_address = document.getElementById("currentAddressLength");

        if (months_at_address.value <= 24) {
            //user has been at current address less than or equal to 2 years
            //request user to enter in previous address aswell



            if (document.getElementById("previousAddress").value==""){
                //if the counter is greater than 1 this means the previous address field has already been added
                alert("add");
                // add the previous address field
                var newdiv = document.createElement("div");
                newdiv.innerHTML = "<div class=\"form-group row\" id=\"previousAddress\">\n" +
                    "                                <label class=\"col-lg-4 col-form-label form-control-label  text-right\" style=\"padding-left: 0px;padding-right: 0px\">Previous Address</label>\n" +
                    "                                <div class=\"col-lg-5\">\n" +
                    "                                    <!--<div id=\"locationField\">-->\n" +
                    "                                    <input class=\"form-control places-autocomplete\" id=\"autocomplete\" placeholder=\"Enter your address\" onchange=\"previousAddress()\" onFocus=\"geolocate()\" type=\"text\" required >\n" +
                    "                                    <!--</div>-->\n" +
                    "                                </div>\n" +
                    "                            </div>";

                document.getElementById("previousAddress_parent").appendChild(newdiv);
            } else {
                alert("dont add");
            }

        } else {
            //remove any previous address field as now not required
            var child = document.getElementById("previousAddress");
            child.parentNode.removeChild(child);
        }
    }



</script>




<!-- Google Maps API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCygH4darG4HYsZ28anfmL2Ouqqojs9QSU&libraries=places&callback=initAutocomplete" async defer></script>

<script>
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;

    /*var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    }; */

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']},);

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    /*function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    } */

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
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