<?php
namespace App\Http\Controllers\Admin;
use App\ChMessage;
use App\Condition;
use App\Contract;
use App\Countory;
use App\Http\Controllers\Controller;
use App\Http\NotificationHelper;
use App\JobRequest;
use App\Payment;
use App\Proposal;
use App\User;
use App\UserMail;
use App\Wallet;
use Illuminate\Http\Request;
class JobbyAppController extends Controller
{
    public function jobRequestIndex()
    {
        $activJobRequest = JobRequest::latest()->where('status', '=', 1)->get();
        $closeJobRequest = JobRequest::latest()->where('status', '=', 2)->get();
        $countory = Countory::all();
        return view('admin.jobRequest.index', compact('activJobRequest', 'closeJobRequest', 'countory'));
    }
    public function jobRequestShow($id)
    {
        $jobRequest = JobRequest::where('id', '=', $id)->first();
        $allProposal = Proposal::where('jobRequest_id', '=', $id)->get();
        return view('admin.jobRequest.show', compact('jobRequest', 'allProposal'));
    }
    public function jobRequestSearchCountry($id)
    {
        $activJobRequest = JobRequest::latest()->where('country_id', '=', $id)->where('status', '=', 1)->get();
        $closeJobRequest = JobRequest::latest()->where('country_id', '=', $id)->where('status', '=', 2)->get();
        $countory = Countory::all();
        return view('admin.jobRequest.index', compact('activJobRequest', 'closeJobRequest', 'countory'));
    }
    public function proposalIndex()
    {
        $activProposal = Proposal::latest()->where('status', '=', 1)->get();
        $acceptProposal = Proposal::latest()->where('status', '=', 2)->get();
        $closeProposal = Proposal::latest()->where('status', '=', 3)->get();
        return view('admin.proposal.index', compact('activProposal', 'acceptProposal', 'closeProposal'));
    }
    public function proposalShow($id)
    {
        $proposal = Proposal::where('id', '=', $id)->first();
        return view('admin.proposal.show', compact('proposal'));
    }
    public function contractIndex($status)
    {
        $contracts = Contract::latest()->where('status', '=', $status)->get();
        return view('admin.contract.index', compact('contracts'));
    }
    public function contractShow($id)
    {
        $contract = Contract::where('id', '=', $id)->first();
        $messages = ChMessage::where('from_id', '=', $contract->applicant_id)->where('to_id', '=', $contract->jober_id)->orwhere('from_id', '=', $contract->jober_id)->where('to_id', '=', $contract->applicant_id)->get();
        return view('admin.contract.show', compact('contract', 'messages'));
    }
    public function adminContractStatus($id, $status)
    {
        $contract = Contract::find($id);
        $contract->status = $status;
        $contract->update();
        if ($status == 2){
            $jobrequests = JobRequest::where('id', $contract->jobRequest->id)->first();
            $jobrequests->status = 2;
            $jobrequests->update();

            $payment = Payment::where('contract_id', $contract->id)->first();
            $payment->status = 1;
            $payment->update();

            $jobber = User::find($contract->jober_id);
            $jobber->wallet = $jobber->wallet + $payment->jobber_get;
            $jobber->update();

//            send notification to jobber on completeion
            $activity = "Tâche terminée";
            $msg = "Toutes nos félicitations! Votre travail est terminé";
            NotificationHelper::pushNotificationJobber($msg, $contract->jobber->pluck('device_token'), $activity);
            NotificationHelper::addtoNitification($contract->applicant->id, $contract->jobber->id, $msg, $contract->id, $activity, $contract->jobber->country);

//            send notification to demandeur on completeion
            $activity1 = "Tâche terminée";
            $msg1 = "Votre travail est terminé par l'administrateur, si vous avez d'autres problèmes, contactez l'équipe d'assistance";
            NotificationHelper::pushNotification($msg1, $contract->applicant->pluck('device_token'), $activity1);
            NotificationHelper::addtoNitification($contract->jobber->id, $contract->applicant->id, $msg1, $contract->id, $activity1, $contract->applicant->country);
        }else if ($status == 3){
            $walet = new Wallet();
            $walet->amount = $contract->price;
            $walet->user_id = $contract->applicant->id;
            $walet->paymant_type = 'ADMIN RECHARGE';
            $walet->transaction_type = 'ingoing';
            $walet->save();
            $user = User::find($contract->applicant->id);
            $user->wallet = $user->wallet + $contract->price;
            $user->update();

//            send notification to demandeur on cancellation
            $activity = "Contrat annulé";
            $msg = "Votre contrat est annulé avec jobber, le montant est débité dans votre portefeuille avec succès";
            NotificationHelper::pushNotification($msg, $contract->applicant->pluck('device_token'), $activity);
            NotificationHelper::addtoNitification($contract->jobber->id, $contract->applicant->id, $msg, $contract->id, $activity, $contract->applicant->country);

//            send notification to jobber on cancellation
            $activity2 = "Contrat annulé";
            $msg2 = "Votre travail est annulé par l'administrateur, si vous rencontrez d'autres problèmes, contactez l'équipe d'assistance";
            NotificationHelper::pushNotificationJobber($msg2, $contract->jobber->pluck('device_token'), $activity2);
            NotificationHelper::addtoNitification($contract->applicant->id, $contract->jobber->id, $msg2, $contract->id, $activity2, $contract->jobber->country);
        }
    }
    public function paymantDetials()
    {
        $payment = Payment::all();
        return view('admin.paymant.index', compact('payment'));
    }
    public function condition()
    {
        $condition = Condition::first();
        return view('admin.setting.condtion.create', compact('condition'));
    }
    public function conditionStore(Request $request)
    {
        $condition = Condition::first();
        $condition->description1 = $request->description1;
        $condition->description2 = $request->description2;
        $condition->update();
        toastr()->success('Update Successfuly!');
        return redirect()->back();
    }
    public function mailRegisterCreate()
    {
        $usermail = UserMail::first();
        return view('admin.setting.mail.userregister', compact('usermail'));
    }
    public function mailRegisterStore(Request $request)
    {
        $usermail = UserMail::first();
        $usermail->title = $request->title;
        $usermail->url = $request->url;
        $usermail->description1 = $request->description1;
        $usermail->description2 = $request->description2;
        $usermail->update();
        toastr()->success('Update Successfuly!');
        return redirect()->back();
    }
    public function adminLogin()
    {
        return view('auth.login');
    }
}
