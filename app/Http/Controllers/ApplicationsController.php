<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Loan_Details;
use App\Personal_Details;
use App\Education_and_Employment_Details;
use App\Financial_Details;
use Illuminate\Support\Facades\Auth;


class ApplicationsController extends Controller
{
    public function step1_index() //Loan Details
    {
        if (Auth::check()) {
            return view('application.1_Loan_Details');
        } else {
            return view('/register');
        }

    }

    public function step2_index() //Personal Details
    {
        $step1_check = session('step1');
        //dd($step1_check);
        //dd(session()->all());

        if ($step1_check=='true'){
            return view('application.2_Personal_Details');
        } else {
            return redirect()->action('ApplicationsController@step1_index');
        }
    }

    public function step3_index() //Education and Employer Details
    {
        $step2_check = session('step2');

        if ($step2_check=='true'){
            return view('application.3_Employer_and_Education_Details');
        } else {
            return redirect()->action('ApplicationsController@step1_index');
        }
    }

    public function step4_index() //Financial Details
    {
        $step3_check = session('step3');

        if ($step3_check=='true'){
            return view('application.4_Financial_Details');
        } else {
            return redirect()->action('ApplicationsController@step1_index');
        }
    }

    public function step1_store(Request $request) //Loan Details
    {
        $this->validate(request(),[
            'loan_amount'=>'required',
            'loan_duration'=>'required',
            'loan_periodicity'=>'required',
            'loan_reason'=>'required'
        ]);

        //store user entries in session until final submit
        //session()->put('Loan_Details', request()->all()); //Application::create(request(['first_name', 'last_name']));
        //dd(session()->get('user1'));

        //
        session(['step1'=>'true']);

        // Save Loan Data
        $loan = new Loan_Details;
        $loan->loan_amount = $request->input('loan_amount');
        $loan->loan_duration = $request->input('loan_duration');
        $loan->loan_periodicity = $request->input('loan_periodicity');
        $loan->loan_reason = $request->input('loan_reason');
        $loan->user_id = auth()->user()->id;
        $loan->save();

        return redirect('/step2');
    }

    public function step2_store(Request $request) //Personal Details
    {
        $this->validate(request(),[
            'title'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'DOB'=>'required',
            'drivers_licence_number'=>'required',
            'mobile_number'=>'required',
            'current_address'=>'required',
            'time_at_address'=>'required',
            'residential_status'=>'required',
            'citizen_status'=>'required',
            'martial_status'=>'required'
        ]);

        //session()->put('Personal_Details', request()->all());
        //dd(session()->all());

        session(['step2'=>'true']);

        $personal = new Personal_Details;
        $personal->title = $request->input('title');
        $personal->first_name = $request->input('first_name');
        $personal->last_name = $request->input('last_name');
        $personal->DOB = $request->input('DOB');
        $personal->drivers_licence_number = $request->input('drivers_licence_number');
        $personal->mobile_number = $request->input('mobile_number');
        $personal->current_address = $request->input('current_address');
        $personal->time_at_address = $request->input('time_at_address');
        $personal->residential_status = $request->input('residential_status');
        $personal->citizen_status = $request->input('citizen_status');
        $personal->martial_status = $request->input('martial_status');
        $personal->user_id = auth()->user()->id;
        $personal->save();

        return redirect('/step3');
    }

    public function step3_store(Request $request) //Education and Employer Details
    {
        $this->validate(request(),[
            'employer'=>'required',
            'employment_status'=>'required',
            'job_title'=>'required',
            'employment_duration'=>'required',
            'education_completed'=>'required'
        ]);

        //session()->put('Employer_and_Education_Details', request()->all());

        session(['step3'=>'true']);


        //store new inputs
        $education_employer_data = new Education_and_Employment_Details;
        $education_employer_data->employer = $request->input('employer');
        $education_employer_data->employment_status = $request->input('employment_status');
        $education_employer_data->job_title = $request->input('job_title');
        $education_employer_data->employment_duration = $request->input('employment_duration');
        $education_employer_data->education_completed = $request->input('education_completed');
        $education_employer_data->current_study_level = $request->input('current_study_level',''); //if request does contain current study return empty string
        $education_employer_data->user_id = auth()->user()->id;
        $education_employer_data->save();

        return redirect('/step4');
    }

    public function step4_store(Request $request) //Financial Details
    {
        $this->validate(request(),[
            'salary'=>'required',
            'salary_periodicity'=>'required',
            'other_expenses'=>'required',
            'expenses_periodicity'=>'required'
        ]);

        //session()->put('Financial_Details', request()->all());
        //dd(session()->all());

        //$id = Auth::id();
        //$userData = array_merge(session()->get('user1'),session()->get('user2'),session()->get('user3'),session()->get('Financial_Details'),array('user_id'=>$id));

        //dd($userData);
        //Application::create($userData);

        //store new inputs
        $financial_data = new Financial_Details;
        $financial_data->salary = $request->input('salary');
        $financial_data->salary_periodicity = $request->input('salary_periodicity');
        $financial_data->rental_income = $request->input('rental_income','');
        $financial_data->rental_periodicity = $request->input('rental_periodicity','');
        $financial_data->other_income = $request->input('other_income','');
        $financial_data->other_income_periodicity = $request->input('other_income_periodicity','');
        $financial_data->properties_value = $request->input('properties_value','');
        $financial_data->other_assets_value = $request->input('other_assets_value','');
        $financial_data->savings_value = $request->input('savings_value','');
        $financial_data->rent = $request->input('rent','');
        $financial_data->rent_periodicity = $request->input('rent_periodicity','');
        $financial_data->other_expenses = $request->input('other_expenses');
        $financial_data->expenses_periodicity = $request->input('expenses_periodicity');
        $financial_data->number_dependents = $request->input('number_dependents');
        $financial_data->loan_home = $request->input('loan_home','');
        $financial_data->loan_home_periodicity = $request->input('loan_home_periodicity','');
        $financial_data->loan_home_owing = $request->input('loan_home_owing','');
        $financial_data->loan_creditcard_owing = $request->input('loan_creditcard_owing','');
        $financial_data->loan_creditcard_limit = $request->input('loan_creditcard_limit','');
        $financial_data->loan_personal = $request->input('loan_personal','');
        $financial_data->loan_personal_periodicity = $request->input('loan_personal_periodicity','');
        $financial_data->loan_personal_owing = $request->input('loan_personal_owing','');
        $financial_data->user_id = auth()->user()->id;
        $financial_data->save();

        return "completed!!";
    }
}
