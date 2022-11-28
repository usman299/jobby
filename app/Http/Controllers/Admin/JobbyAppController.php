<?php

namespace App\Http\Controllers\Admin;

use App\ChMessage;
use App\Condition;
use App\Contact;
use App\Countory;
use App\JobRequest;
use App\Payment;
use App\Proposal;
use App\Contract;
use App\Http\Controllers\Controller;
use App\UserMail;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class JobbyAppController extends Controller
{
    public function jobRequestIndex()
    {
        $activJobRequest = JobRequest::latest()->where('status','=',1)->get();
        $closeJobRequest = JobRequest::latest()->where('status','=',2)->get();
        $countory = Countory::all();
        return view('admin.jobRequest.index',compact('activJobRequest','closeJobRequest','countory'));
    }
    public function jobRequestShow($id)
    {
        $jobRequest = JobRequest::where('id','=',$id)->first();
        $allProposal = Proposal::where('jobRequest_id','=',$id)->get();
        return view('admin.jobRequest.show',compact('jobRequest','allProposal'));
    }
    public function jobRequestSearchCountry($id)
    {
        $activJobRequest = JobRequest::latest()->where('country_id','=',$id)->where('status','=',1)->get();
        $closeJobRequest = JobRequest::latest()->where('country_id','=',$id)->where('status','=',2)->get();
        $countory = Countory::all();
        return view('admin.jobRequest.index',compact('activJobRequest','closeJobRequest','countory'));
    }
    public function proposalIndex()
    {
        $activProposal = Proposal::latest()->where('status','=',1)->get();
        $acceptProposal = Proposal::latest()->where('status','=',2)->get();
        $closeProposal = Proposal::latest()->where('status','=',3)->get();
        return view('admin.proposal.index',compact('activProposal','acceptProposal','closeProposal'));
    }
    public function proposalShow($id)
    {
        $proposal = Proposal::where('id','=',$id)->first();
        return view('admin.proposal.show',compact('proposal'));
    }
    public function contractIndex()
    {
        $activContract = Contract::latest()->where('status','=',1)->get();
        $compelteContract = Contract::latest()->where('status','=',2)->get();
        $pandingContract = Contract::latest()->where('status','=',4)->get();
        $cancelContract= Contract::latest()->where('status','=',2)->get();
        return view('admin.contract.index',compact('activContract','compelteContract','pandingContract','cancelContract'));
    }
    public function contractShow($id)
    {
        $contract = Contract::where('id','=',$id)->first();

        $messages = ChMessage::where('from_id','=',$contract->applicant_id)->where('to_id','=',$contract->jober_id)->orwhere('from_id','=',$contract->jober_id)->where('to_id','=',$contract->applicant_id)->get();

        return view('admin.contract.show',compact('contract','messages'));
    }

    public function adminContractStatus($id,$status)
    {

        $contract = Contract::find($id);
        if ($contract->status != $status) {
            if ($status == 3) {
                Payment::where('contract_id', $contract->id)->update(['status' => 1]);
                $contract->status = $status;
                $contract->update();
                toastr()->success('Contract  Comeplete Successfuly!');
                return redirect()->back();
            } elseif ($status == 5) {

                if ($contract->status == 3) {


                    return redirect()->back();
                } else {
                    Payment::where('contract_id', $contract->id)->update(['status' => 2]);
                    $contract->status = $status;
                    $contract->update();

                    toastr()->error('Contract  Cancel Successfuly!');
                    return redirect()->back();

                }
            }

        }

    }

    public function paymantDetials()
    {
        $payment = Payment::all();

        return view('admin.paymant.index',compact('payment'));
    }
    public function condition(){

        $condition = Condition::first();

        return view('admin.setting.condtion.create', compact('condition'));
    }
    public function conditionStore(Request $request){

        $condition = Condition::first();
        $condition->description1 = $request->description1;
        $condition->description2 = $request->description2;
        $condition->update();
        toastr()->success('Update Successfuly!');
        return redirect()->back();
    }
    public function mailRegisterCreate(){

        $usermail = UserMail::first();

        return view('admin.setting.mail.userregister', compact('usermail'));
    }
    public function mailRegisterStore(Request $request){

        $usermail = UserMail::first();
        $usermail->title = $request->title;
        $usermail->url = $request->url;
        $usermail->description1 = $request->description1;
        $usermail->description2 = $request->description2;
        $usermail->update();
        toastr()->success('Update Successfuly!');
        return redirect()->back();
    }
    public function adminLogin(){

        return view('auth.login');
    }

}
