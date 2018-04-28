<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Loan_Details;
use App\Personal_Details;
use App\Education_and_Employment_Details;
use App\Financial_Details;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;


class ApplicationsController extends Controller
{
//    TODO need to update code so that when back is select and values updated and resubmitted that a new database entry is not created only existing values updated
    public function step1_index(Request $request) //Loan Details
    {
        if (Auth::check()) {
            $loan_details = $request->session()->get('loan_details');
            return view('application.1_Loan_Details',compact('loan_details',$loan_details));
        } else {
            return view('/register');
        }

    }

    public function step2_index(Request $request) //Personal Details
    {
        $step1_check = session('step1');
        //dd($step1_check);
        //dd(session()->all());

        if ($step1_check=='true'){
            $personal_details = $request->session()->get('personal_details');
            return view('application.2_Personal_Details',compact('personal_details',$personal_details));
        } else {
            return redirect()->action('ApplicationsController@step1_index');
        }
    }

    public function step3_index(Request $request) //Education and Employer Details
    {
        $step2_check = session('step2');

        if ($step2_check=='true'){
            $education_employment_details = $request->session()->get('education_employment_details');
            return view('application.3_Employer_and_Education_Details',compact('education_employment_details',$education_employment_details));
        } else {
            return redirect()->action('ApplicationsController@step1_index');
        }
    }

    public function step4_index(Request $request) //Financial Details
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
        $validatedData1=$this->validate(request(),[
            'loan_amount'=>'required',
            'loan_duration'=>'required',
            'loan_periodicity'=>'required',
            'loan_reason'=>'required',
        ]);

        //store user entries in session until final submit
        //session()->put('Loan_Details', request()->all()); //Application::create(request(['first_name', 'last_name']));

        $request->session()->forget('loan_details');
        $request->session()->forget('personal_details');
        $request->session()->forget('education_employment_details');
        $request->session()->forget('financial_details');

        //
        session(['step1'=>'true']);

        $id = Auth::id();
        $validatedData1 =array_merge($validatedData1,array('user_id'=>$id));

//        if(empty($request->session()->get('loan_details'))){
            $loan = new Loan_Details();
            $loan->fill($validatedData1);
            $request->session()->put('loan_details', $loan);
//        }else{
//            $loan = $request->session()->get('loan_details');
//            $loan->fill($validatedData1);
//            $request->session()->put('loan_details', $loan);
//        }

        //dd($loan);
        //$loan->save();

//
//        // Save Loan Data
//        $loan = new Loan_Details;
//        $loan->loan_amount = $request->input('loan_amount');
//        $loan->loan_duration = $request->input('loan_duration');
//        $loan->loan_periodicity = $request->input('loan_periodicity');
//        $loan->loan_reason = $request->input('loan_reason');
//        $loan->user_id = auth()->user()->id;
//        $loan->save();

        return redirect('/step2');
    }

    public function step2_store(Request $request) //Personal Details
    {
        $validatedData2=$this->validate(request(),[
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

        session(['step2'=>'true']);


        $id = Auth::id();
        $validatedData2=array_merge($validatedData2,array('user_id'=>$id));

//        if(empty($request->session()->get('personal_details'))){
            $personal = new Personal_Details();
            $personal->fill($validatedData2);
            $request->session()->put('personal_details', $personal);
//        }else{
//            $personal = $request->session()->get('personal_details');
//            $personal->fill($validatedData2);
//            $request->session()->put('personal_details', $personal);
//        }



//        $personal = new Personal_Details;
//        $personal->title = $request->input('title');
//        $personal->first_name = $request->input('first_name');
//        $personal->last_name = $request->input('last_name');
//        $personal->DOB = $request->input('DOB');
//        $personal->drivers_licence_number = $request->input('drivers_licence_number');
//        $personal->mobile_number = $request->input('mobile_number');
//        $personal->current_address = $request->input('current_address');
//        $personal->time_at_address = $request->input('time_at_address');
//        $personal->residential_status = $request->input('residential_status');
//        $personal->citizen_status = $request->input('citizen_status');
//        $personal->martial_status = $request->input('martial_status');
//        $personal->user_id = auth()->user()->id;
//        $personal->save();

        //move to next application page
        return redirect('/step3');
    }

    public function step3_store(Request $request) //Education and Employer Details
    {
        $validatedData3=$this->validate(request(),[
            'employer'=>'required',
            'employment_status'=>'required',
            'job_title'=>'required',
            'employment_duration'=>'required',
            'education_completed'=>'required'
        ]);

        //session()->put('Employer_and_Education_Details', request()->all());

        session(['step3'=>'true']);


        $id = Auth::id();
        $current_study_level = $request->input('current_study_level','');
        $validatedData3 =array_merge($validatedData3,array('current_study_level'=>$current_study_level),array('user_id'=>$id));

//        if(empty($request->session()->get('education_employment_details'))){
            $education_employer = new Education_and_Employment_Details();
            $education_employer->fill($validatedData3);
            $request->session()->put('education_employment_details', $education_employer);
//        }else{
//            $education_employer = $request->session()->get('education_employment_details');
//            $education_employer->fill($validatedData3);
//            $request->session()->put('education_employment_details', $education_employer);
//        }



//        //store new inputs
//        $education_employer_data = new Education_and_Employment_Details;
//        $education_employer_data->employer = $request->input('employer');
//        $education_employer_data->employment_status = $request->input('employment_status');
//        $education_employer_data->job_title = $request->input('job_title');
//        $education_employer_data->employment_duration = $request->input('employment_duration');
//        $education_employer_data->education_completed = $request->input('education_completed');
//        $education_employer_data->current_study_level = $request->input('current_study_level',''); //if request does contain current study return empty string
//        $education_employer_data->user_id = auth()->user()->id;
//        $education_employer_data->save();

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
        $financial_data->rental_income = $request->input('rental_income',0);
        $financial_data->rental_periodicity = $request->input('rental_periodicity','weekly');
        $financial_data->other_income = $request->input('other_income',0);
        $financial_data->other_income_periodicity = $request->input('other_income_periodicity','weekly');
        $financial_data->properties_value = $request->input('properties_value',0);
        $financial_data->other_assets_value = $request->input('other_assets_value',0);
        $financial_data->savings_value = $request->input('savings_value',0);
        $financial_data->rent_expense = $request->input('rent_expense',0);
        $financial_data->rent_expense_periodicity = $request->input('rent_expense_periodicity','weekly');
        $financial_data->other_expenses = $request->input('other_expenses');
        $financial_data->expenses_periodicity = $request->input('expenses_periodicity');
        $financial_data->number_dependents = $request->input('number_dependents');
        $financial_data->loan_home = $request->input('loan_home',0);
        $financial_data->loan_home_periodicity = $request->input('loan_home_periodicity','weekly');
        $financial_data->loan_home_owing = $request->input('loan_home_owing',0);
        $financial_data->loan_creditcard_owing = $request->input('loan_creditcard_owing',0);
        $financial_data->loan_creditcard_limit = $request->input('loan_creditcard_limit',0);
        $financial_data->loan_personal = $request->input('loan_personal',0);
        $financial_data->loan_personal_periodicity = $request->input('loan_personal_periodicity','weekly');
        $financial_data->loan_personal_owing = $request->input('loan_personal_owing',0);
        $financial_data->user_id = auth()->user()->id;
        $financial_data->save();



        $loan=$request->session()->get('loan_details');
        $loan->save();

        $personal=$request->session()->get('personal_details');
        $personal->save();

        $education_employer=$request->session()->get('education_employment_details');
        //dd($education_employer);
        $education_employer->save();

        return "completed!!";
    }
}
