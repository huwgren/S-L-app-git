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

{{-- TODO need to add old value function for when validation redirect occurs :value="{{old('loan_amount')}}" --}}

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
        <div class="progress-bar bg-success " role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80% Complete</div>
    </div>
</div>



<div class="container.fluid" style="height: 60px; background-color: #ffffff;">
</div>



    <div class="row" >
        <div class="col-8 offset-2" >
        <div class="card card-outline-secondary" style="border-style: none; ">
            <div class="card-header" style="border-style: none; background-color: #659267; color: white">
                <h5 class="mb-0">Financial Details</h5>
            </div>
            <div class="card-body" style="background-color:#efebe4" >
                <form class="form needs-validation" method="post" action="/step4" novalidate>

                    @csrf

                    <!-------------------------------- Income ----------------------------------->

                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Income</strong>
                    </div>


                    <div id="parentAdditionalIncomeBtn">
                        <div class="form-group row" id="BaseIncome" >
                            <label for="salary" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px">Salary</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" id="salary" name="salary" required>
                                    <div class="input-group-append">
                                        <select class="form-control btn btn-outline-secondary" id="salary_periodicity" name="salary_periodicity" >
                                            <option value="weekly">Weekly</option>
                                            <option value="fortnightly">Fortnightly</option>
                                            <option value="monthly">Monthly</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback offset-1">
                                        Required.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row  col-lg-7 offset-4" id="additionalIncomeBtn">
                            <input type="button" class="btn btn-outline-info btn-sm" value="Add other income" onclick="addAdditionalIncome()" >
                        </div>
                    </div>

                    <div id="additionalIncomeDiv" class="mb-3">

                    </div>




                    <!-------------------------------- Assets ----------------------------------->

                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Assets</strong>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px; padding-top: 0px">Do you own any properties?</label>
                        <div class="col-lg-5">
                            <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons">
                                <label class="btn btn-outline-info">
                                    <input type="radio" id="option1" onchange="addPropertiesOwned()" />Yes</label>
                                <label class="btn btn-outline-info active">
                                    <input type="radio" id="option2" onchange="removePropertiesOwned()" />No</label>
                            </div>
                        </div>
                    </div>

                    <div id="propertiesOwned_parent" class="mb-3">
                        <!--placeholder for properties owned-->
                    </div>


                    <div class="form-group row">
                        <label for="other_assets_value" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px">Other assets <i>(if any)</i></label>
                        <div class="col-lg-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" id="other_assets_value" name="other_assets_value" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="savings_value" class="col-lg-4 col-form-label form-control-label text-right " style="padding-left: 0px;padding-right: 0px; padding-top: 0px;">Total balances in savings / investment accounts <i>(if any)</i></label>
                        <div class="col-lg-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" id="savings_value" name="savings_value" required>
                            </div>
                        </div>
                    </div>


                    <!-------------------------------- Expenses ----------------------------------->

                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Expenses</strong>
                    </div>


                    <div class="form-group row">
                        <label for="rent" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px">Rent or board <i>(if any)</i></label>
                        <div class="col-lg-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" id="rent" name="rent" required>
                                <div class="input-group-append">
                                    <select class="form-control btn btn-outline-secondary" id="rent_periodicity" name="rent_periodicity">
                                        <option value="weekly">Weekly</option>
                                        <option value="fortnightly">Fortnightly</option>
                                        <option value="monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="other_expenses" class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px; padding-top: 0px">All other expenses <i>(i.e. food, regular bills, transport)</i></label>
                        <div class="col-lg-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" id="other_expenses" name="other_expenses" required>
                                <div class="input-group-append">
                                    <select class="form-control btn btn-outline-secondary" id="expenses_periodicity" name="expenses_periodicity" >
                                        <option value="weekly">Weekly</option>
                                        <option value="fortnightly">Fortnightly</option>
                                        <option value="monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px; padding-top: 0px">How many dependents do you have? <i>(excluding spouse)</i></label>
                        <div class="col-lg-5">
                            <select class="form-control" id="number_dependents" name="number_dependents" required>
                                <option>Please select</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>

                    <!-------------------------------- Liabilities ----------------------------------->

                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Liabilities</strong>
                    </div>

                    <div style="color: #659267" class="mb-3 text-right col-lg-4">
                        <strong>Home Loans</strong>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px; padding-top: 0px;font-size: 15px; ">Do you have any home loans?</label>
                        <div class="col-lg-5">
                            <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons" >
                                <label class="btn btn-outline-info">
                                    <input type="radio" id="loanHome_yes"  onchange="addAdditionalLoan_Home()" >Yes</label>
                                <label class="btn btn-outline-info active">
                                    <input type="radio"  id="loanHome_no"  onchange="removeLoan_Home()" >No</label>
                            </div>
                        </div>
                    </div>

                    <div id="additionalLoan_Home" class="mb-3">
                        <!--placeholder for home loan repayments-->
                    </div>


                    <div style="color: #659267" class="mb-3 text-right col-lg-4">
                        <strong>Credit Cards</strong>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px; padding-top: 0px;font-size: 15px; ">Do you have any credit cards?</label>
                        <div class="col-lg-5">
                            <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons" >
                                <label class="btn btn-outline-info">
                                    <input type="radio" id="option1" onchange="addAdditionalLoan_CC()" />Yes</label>
                                <label class="btn btn-outline-info active">
                                    <input type="radio" id="option2" onchange="removeAdditionalLoan_CC()" />No</label>
                            </div>
                        </div>
                    </div>

                    <div id="additionalLoan_CC" class="mb-3">
                        <!--placeholder for credit card limits-->
                    </div>


                    <div style="color: #659267" class="mb-3 text-right col-lg-4">
                        <strong>Personal Loans</strong>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px; padding-top: 0px;font-size: 15px; ">Do you have any personal loans?</label>
                        <div class="col-lg-5">
                            <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons" >
                                <label class="btn btn-outline-info">
                                    <input type="radio" name="options" id="option1" onchange="addAdditionalLoan_Personal()" />Yes</label>
                                <label class="btn btn-outline-info active">
                                    <input type="radio" name="options" id="option2"  onchange="removeAdditionalLoan_Personal()" />No</label>
                            </div>
                        </div>
                    </div>

                    <div id="additionalLoan_Personal" class="mb-3">
                        <!--placeholder for personal-->
                    </div>



                    <!-------------------------------- Loan Summary -------------------------------->


                    <!-------------------------------- Agreements -------------------------------->

                    <div style="border-bottom-style:solid; border-bottom-width: thin; color: #659267" class="mb-3">
                        <strong>Acknowledgments</strong>
                    </div>

                    <div class="form-group row agreement">
                        <label class="col-lg-6 control-label offset-1">Considering your future circumstances and financial position, are you going to be able to repay the loan?</label>
                        <div class="col-lg-3">
                            <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons">
                                <label class="btn btn-outline-success">
                                    <input type="radio" name="options" id="option1" />Yes</label>
                                <label class="btn btn-outline-danger">
                                    <input type="radio" name="options" id="option2" />No</label>
                            </div>
                            <div class="invalid-feedback">
                                Required.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row info-true">
                        <label class="col-lg-6 control-label offset-1">I agree that the information I have given is true and correct</label>
                        <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox" id="Information_acknowledge" name="Information_acknowledge" required >
                                </div>
                        </div>
                        <div class="invalid-feedback">
                            Required.
                        </div>
                    </div>

                    <div class="form-group row info-true">
                        <label class="col-lg-6 control-label offset-1">I have reviewed, understand and consent to the <a href="">Privacy Consents and Electronic Authorisation</a> </label>
                        <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox" id="Consent_acknowledge" name="Consent_acknowledge" required>
                                </div>
                                <div class="invalid-feedback">
                                    Required.
                                </div>
                        </div>
                    </div>


                    <!-------------------------------- Buttons ----------------------------------->


                    <div class="form-group row justify-content-center mt-4">
                        <button class="btn btn-success btn-lg" type="submit"> Continue</button>
                    </div>

                    <div class="form-group row justify-content-center">
                        <a class="btn btn-outline-info" href="3_Employer_and_Education_Details.blade.php" role="button">Previous Page</a>
                        <!--  <input type="button" class="btn btn-outline-info" value="Previous page">  -->
                    </div>

                    <!--<div class="form-group row justify-content-center text-info">
                        <i class="fas fa-caret-left align-self-center" ></i> Previous page
                    </div>-->

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

















<script>

    // ---------------------  Additional Income ------------------------------ //
    function addAdditionalIncome() {

        //remove the add additional income button
        var child = document.getElementById("additionalIncomeBtn");
        child.parentNode.removeChild(child);

        //add the inputs for additional income
        var newdiv = document.createElement("div");
                newdiv.innerHTML = "<div style=\"background-color: seashell; border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; \">\n" +
                    "    <div class=\"form-group row\">\n" +
                    "        <label for=\"rental_income\" class=\"col-lg-4 col-form-label form-control-label text-right\" style=\"padding-left: 0px;padding-right: 0px;\">Rental income</label>\n" +
                    "        <div class=\"col-lg-5\">\n" +
                    "            <div class=\"input-group\">\n" +
                    "                <div class=\"input-group-prepend\">\n" +
                    "                    <span class=\"input-group-text\">$</span>\n" +
                    "                </div>\n" +
                    "                <input type=\"text\" class=\"form-control\" id=\"rental_income\" name=\"rental_income\">\n" +
                    "                <div class=\"input-group-append\">\n" +
                    "                    <select class=\"form-control btn btn-outline-secondary\" id=\"rental_periodicity\" name=\"rental_periodicity\" >\n" +
                    "                        <option value=\"weekly\">Weekly</option>\n" +
                    "                        <option value=\"fortnightly\">Fortnightly</option>\n" +
                    "                        <option value=\"monthly\">Monthly</option>\n" +
                    "                    </select>\n" +
                    "                </div>\n" +
                    "            </div>\n" +
                    "        </div>\n" +
                    "        <div class=\"col-lg-3\" >\n" +
                    "         <button type=\"button\" class=\"close pr-2\" style=\"color:red\" onclick=\"closeAdditionalIncome()\">                                    <i class=\"fas fa-times-circle\"></i>\n" +
                    "         </button>\n" +
                    "        </div>"+
                    "    </div>\n" +
                    "\n" +
                    "    <div class=\"form-group row\">\n" +
                    "        <label for=\"other_income\" class=\"col-lg-4 col-form-label form-control-label text-right\" style=\"padding-left: 0px;padding-right: 0px;\">Other income</label>\n" +
                    "        <div class=\"col-lg-5\">\n" +
                    "            <div class=\"input-group\">\n" +
                    "                <div class=\"input-group-prepend\">\n" +
                    "                    <span class=\"input-group-text\">$</span>\n" +
                    "                </div>\n" +
                    "                <input type=\"text\" class=\"form-control\" id=\"other_income\" name=\"other_income\">\n" +
                    "                <div class=\"input-group-append\">\n" +
                    "                    <select class=\"form-control btn btn-outline-secondary\" id=\"other_income_periodicity\" name=\"other_income_periodicity\">\n" +
                    "                        <option value=\"weekly\">Weekly</option>\n" +
                    "                        <option value=\"fortnightly\">Fortnightly</option>\n" +
                    "                        <option value=\"monthly\">Monthly</option>\n" +
                    "                    </select>\n" +
                    "                </div>\n" +
                    "            </div>\n" +
                    "        </div>\n" +
                    "    </div>\n" +
                    "</div>";

                document.getElementById("additionalIncomeDiv").appendChild(newdiv);
    }


    function closeAdditionalIncome() {

        //remove the additional loan
        var child = document.getElementById("additionalIncomeDiv");
        child.parentNode.removeChild(child);

        //now that we have removed the additional Income we need to add back in the additional income button
        addBackAdditionalIncomeBtn();

    }

    function addBackAdditionalIncomeBtn() {

        var newdiv = document.createElement("div");

        //html code for button & div placeholder for additional income
        newdiv.innerHTML="<div class=\"form-group row  col-lg-7 offset-4\" id=\"additionalIncomeBtn\">\n" +
            "                        <input type=\"button\" class=\"btn btn-outline-info btn-sm\" value=\"Add other income\" onclick=\"addAdditionalIncome()\" >\n" +
            "                    </div>" +
            "<div id=\"additionalIncomeDiv\" class=\"mb-3\">\n" +
            "</div>";

        var parentElement = document.getElementById("parentAdditionalIncomeBtn");
        //var lastChild = document.getElementById("BaseIncome");
        parentElement.appendChild(newdiv);


    }

    // ---------------------  Home Loan ------------------------------ //

    function addAdditionalLoan_Home() {

        //add the inputs for additional Loan

        var newdiv = document.createElement("div");
        newdiv.innerHTML = "<div id=\"loan_Home\" style=\"background-color: seashell; border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; \">\n" +
            "    <div class=\"form-group row\">\n" +
            "        <label for=\"loan_home\ class=\"col-lg-4 col-form-label form-control-label text-right\" style=\"padding-left: 0px;padding-right: 0px;\">Total repayments for all home loans</i></label>\n" +
            "        <div class=\"col-lg-5\">\n" +
            "            <div class=\"input-group\">\n" +
            "                <div class=\"input-group-prepend\">\n" +
            "                    <span class=\"input-group-text\">$</span>\n" +
            "                </div>\n" +
            "                <input type=\"text\" class=\"form-control\" id=\"loan_home\" name=\"loan_home\">\n" +
            "                <div class=\"input-group-append\">\n" +
            "                    <select class=\"form-control btn btn-outline-secondary\" id=\"loan_home_periodicity\" name=\"loan_home_periodicity\" >\n" +
            "                        <option value=\"weekly\">Weekly</option>\n" +
            "                        <option value=\"fortnightly\">Fortnightly</option>\n" +
            "                        <option value=\"monthly\">Monthly</option>\n" +
            "                    </select>\n" +
            "                </div>\n" +
            "            </div>\n" +
            "        </div>\n" +
            "        <div class=\"col-lg-3\" >\n" +
            "         <button type=\"button\" class=\"close pr-2\" style=\"color:red\" onclick=\"removeLoan_Home()\">                                    \n" +
            "         </button>\n" +
            "        </div>"+
            "    </div>\n" +
            "\n" +
            "\n" +
            "    <div class=\"form-group row\">\n" +
            "        <label for=\"loan_home_owing\" class=\"col-lg-4 col-form-label form-control-label text-right\" style=\"padding-left: 0px;padding-right: 0px\">Total owing for all home loans</label>\n" +
            "        <div class=\"col-lg-5\">\n" +
            "            <div class=\"input-group\">\n" +
            "                <div class=\"input-group-prepend\">\n" +
            "                    <span class=\"input-group-text\">$</span>\n" +
            "                </div>\n" +
            "                <input type=\"text\" class=\"form-control\" id=\"loan_home_owing\" name=\"loan_home_owing\">\n" +
            "            </div>\n" +
            "        </div>\n" +
            "    </div>\n" +
            "</div>";

        document.getElementById("additionalLoan_Home").appendChild(newdiv);
    }


    function removeLoan_Home() {
        var child = document.getElementById("loan_Home");
        child.parentNode.removeChild(child);

    }

    //------------------------- Credit Card ------------------------------------//
    function addAdditionalLoan_CC() {

        //add the inputs for additional Loan

        var newdiv = document.createElement("div");
        newdiv.innerHTML = "<div id=\"loan_CC\" style=\"background-color: seashell; border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; \">\n" +
            "    <div class=\"form-group row\">\n" +
            "        <label for=\"loan_creditcard_owing\" class=\"col-lg-4 col-form-label form-control-label text-right\" style=\"padding-left: 0px;padding-right: 0px\">Total owing for all credit cards</label>\n" +
            "        <div class=\"col-lg-5\">\n" +
            "            <div class=\"input-group\">\n" +
            "                <div class=\"input-group-prepend\">\n" +
            "                    <span class=\"input-group-text\">$</span>\n" +
            "                </div>\n" +
            "                <input type=\"text\" class=\"form-control\" id=\"loan_creditcard_owing\" name=\"loan_creditcard_owing\">\n" +
            "            </div>\n" +
            "        </div>\n" +
            "        <div class=\"col-lg-3\" >\n" +
            "         <button type=\"button\" class=\"close pr-2\" style=\"color:red\" onclick=\"removeAdditionalLoan_CC()\">\n" +
            "         </button>\n" +
            "        </div>"+
            "    </div>\n" +
            "\n" +
            "    <div class=\"form-group row\">\n" +
            "        <label for=\"loan_creditcard_limit\" class=\"col-lg-4 col-form-label form-control-label text-right\" style=\"padding-left: 0px;padding-right: 0px\">Total credit limit for all credit cards</label>\n" +
            "        <div class=\"col-lg-5\">\n" +
            "            <div class=\"input-group\">\n" +
            "                <div class=\"input-group-prepend\">\n" +
            "                    <span class=\"input-group-text\">$</span>\n" +
            "                </div>\n" +
            "                <input type=\"text\" class=\"form-control\" id=\"loan_creditcard_limit\" name=\"loan_creditcard_limit\">\n" +
            "            </div>\n" +
            "        </div>\n" +
            "    </div>\n" +
            "</div>";

        document.getElementById("additionalLoan_CC").appendChild(newdiv);
    }


    function removeAdditionalLoan_CC() {
        var child = document.getElementById("loan_CC");
        child.parentNode.removeChild(child);

    }

    // ---------------------  Personal Loan ------------------------------ //

    function addAdditionalLoan_Personal() {

        //add the inputs for additional Loan

        var newdiv = document.createElement("div");
        newdiv.innerHTML = "<div id=\"loan_Personal\" style=\"background-color: seashell; border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; \">\n" +
            "    <div class=\"form-group row\">\n" +
            "        <label for=\"loan_personal\" class=\"col-lg-4 col-form-label form-control-label text-right\" style=\"padding-left: 0px;padding-right: 0px;\">Total repayments for all other loans</i></label>\n" +
            "        <div class=\"col-lg-5\">\n" +
            "            <div class=\"input-group\">\n" +
            "                <div class=\"input-group-prepend\">\n" +
            "                    <span class=\"input-group-text\">$</span>\n" +
            "                </div>\n" +
            "                <input type=\"text\" class=\"form-control\" id=\"loan_personal\" name=\"loan_personal\">\n" +
            "                <div class=\"input-group-append\">\n" +
            "                    <select class=\"form-control btn btn-outline-secondary\" id=\"loan_personal_periodicity\" name=\"loan_personal_periodicity\" >\n" +
            "                        <option value=\"weekly\">Weekly</option>\n" +
            "                        <option value=\"fortnightly\">Fortnightly</option>\n" +
            "                        <option value=\"monthly\">Monthly</option>\n" +
            "                    </select>\n" +
            "                </div>\n" +
            "            </div>\n" +
            "        </div>\n" +
            "        <div class=\"col-lg-3\" >\n" +
            "         <button type=\"button\" class=\"close pr-2\" style=\"color:red\" onclick=\"removeAdditionalLoan_Personal()\">\n" +
            "         </button>\n" +
            "        </div>"+
            "    </div>\n" +
            "\n" +
            "\n" +
            "    <div class=\"form-group row\">\n" +
            "        <label for=\"loan_personal_owing\" class=\"col-lg-4 col-form-label form-control-label text-right\" style=\"padding-left: 0px;padding-right: 0px\">Total owing of all other loans</label>\n" +
            "        <div class=\"col-lg-5\">\n" +
            "            <div class=\"input-group\">\n" +
            "                <div class=\"input-group-prepend\">\n" +
            "                    <span class=\"input-group-text\">$</span>\n" +
            "                </div>\n" +
            "                <input type=\"text\" class=\"form-control\" id=\"loan_personal_owing\" name=\"loan_personal_owing\" >\n" +
            "            </div>\n" +
            "        </div>\n" +
            "    </div>\n" +
            "</div>";

        document.getElementById("additionalLoan_Personal").appendChild(newdiv);
    }


    function removeAdditionalLoan_Personal() {
        var child = document.getElementById("loan_Personal");
        child.parentNode.removeChild(child);

    }


    // ---------------------  Properties Owned ------------------------------ //

    function addPropertiesOwned() {
        var newdiv = document.createElement("div");
        newdiv.innerHTML = "<div id=\"propertiesOwned\">\n" +
            "<div class=\"form-group row\" >\n" +
            "                        <label for=\"properties_value\" class=\"col-lg-4 col-form-label form-control-label text-right\" style=\"padding-left: 0px;padding-right: 0px\">Total market value of all properties</label>\n" +
            "                        <div class=\"col-lg-5\">\n" +
            "                            <div class=\"input-group\">\n" +
            "                                <div class=\"input-group-prepend\">\n" +
            "                                    <span class=\"input-group-text\">$</span>\n" +
            "                                </div>\n" +
            "                                <input type=\"text\" class=\"form-control\" id=\"properties_value\" name=\"properties_value\">\n" +
            "                            </div>\n" +
            "                        </div>\n" +
            "                    </div>\n" +
            "</div>";
        document.getElementById("propertiesOwned_parent").appendChild(newdiv);
    }

    function removePropertiesOwned() {
        var child = document.getElementById("propertiesOwned");
        child.parentNode.removeChild(child);
    }

</script>










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


<!--

<div style="background-color: seashell; border-top-style: solid; border-top-width: thin;border-bottom-style: solid; border-bottom-width: thin; padding-top: 10px; ">
    <div class="form-group row">
        <label class="col-lg-4 col-form-label form-control-label text-right" style="padding-left: 0px;padding-right: 0px;">Total repayments</i></label>
        <div class="col-lg-7">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown">Weekly</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Fortnightly</a>
                        <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label offset-1 text-right" style="padding-left: 0px;padding-right: 0px">Total owing on loan</label>
        <div class="col-lg-7">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>
</div>


-->