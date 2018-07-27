<?php

namespace App\Http\Controllers;

use App\Loan_Details;
use Illuminate\Http\Request;

class LoanDetailsController extends Controller
{
    public function index()
    {
        $loanDetails_request = Loan_Details::all();
        return view('masterDashboard')->with('loanDetails_request', $loanDetails_request);
    }
}
