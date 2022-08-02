<?php

namespace App\Http\Controllers\Front;

use App\About;
use App\Card;
use App\CardPaymant;
use App\Category;
use App\Check;
use App\Condition;
use App\Events;
use App\Http\NotificationHelper;
use App\JobRequest;

use App\Mail\AllContact;
use App\Mail\BonCadeau;
use App\Contact;
use App\Contract;
use App\Countory;
use App\Diploma;
use App\Http\Controllers\Controller;
use App\JobberProfile;
use App\Notfication;
use App\Payment;
use App\Portfolio;
use App\Proposal;
use App\QuestionAnswer;
use App\SubCategory;
use App\Subpaymant;
use App\Subscribe;
use App\Subscription;
use App\User;
use App\Walet;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

use function Sodium\compare;

class SettingsController extends Controller
{
    public function settings()
    {
        $title = 'Paramètres';
        $user = Auth::user();
        $contract = Contract::where('jober_id', $user->id)->where('status', '!=', '3')->get()->count();
        $payment = Payment::where('jobber_id', $user->id)->where('status', 1)->sum('jobber_get');
        return view('front.settings.settings', compact('user', 'title', 'contract', 'payment'));
    }

    public function profile()
    {
        $title = 'Profil';
        $user = Auth::user();
        $countries = Countory::all();
        $categories = Category::all();
        return view('front.settings.profile', compact('user', 'title', 'countries', 'categories'));
    }

    public function passwordChange()
    {
        $title = 'Changer le mot de passe';
        $user = Auth::user();
        return view('front.settings.passwordChange', compact('user', 'title'));
    }

    public function about()
    {
        $title = 'À propos de nous';
        $user = Auth::user();
        $about = About::first();
        return view('front.settings.about', compact('user', 'title', 'about'));
    }

    public function notifications()
    {
        $title = 'Notifications';
        $user = Auth::user();
        $notfications = Notfication::latest()->where('r_id', '=', $user->id)->paginate('20');
        Notfication::latest()->where('r_id', '=', $user->id)->update(['status' => 1]);
        return view('front.settings.notifications', compact('user', 'title', 'notfications'));
    }

    public function support()
    {
        $title = 'Soutien';
        $user = Auth::user();
        $questionAnswer = QuestionAnswer::all();
        return view('front.settings.support', compact('user', 'title', 'questionAnswer'));
    }

    public function contact()
    {
        $title = 'Contact';
        $user = Auth::user();
        return view('front.settings.contact', compact('user', 'title'));
    }

    public function contactStore(Request $request)
    {

        $user = Auth::user();
        $contact = new Contact();
        if ($user->role == 1) {
            $role = 'Demandeur';
        } else {
            $role = 'Jobber';
        }
        $contact->user_id = $user->id;
        $contact->role = $user->role;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        if ($contact->save()) {
            $dataa = array(
                'firstName' => $user->firstName,
                'lastName' => $user->lastName,
                'email' => $request->email,
                'role' => $role,
                'subject' => $request->subject,
                'message' => $request->message,
            );
            Mail::to('mughalusman5554@gmail.com')->send(new  AllContact($dataa));
            $notification = array(
                'messege' => 'Sauvegarde réussie!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'profileImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'profileImage/';
            $image1->move($destinationPath, $name);
            $user->image = 'profileImage/' . $name;
        }
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->gender = $request->gender;
        $user->postalCode = $request->postalCode;
        $user->dob = $request->dob;
        $user->description = $request->description;

        if ($request->password) {
            $user->password = Hash::make($request->password);
            Auth::logout();
        }


        /*$user->category_id = $request->category_id;
        $user->subcategory_id = $request->subcategory_id;
        $user->rate_per_hour = $request->rate_per_hour;*/

        $user->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function badgeUpdate(Request $request)
    {
        $user = Auth::user();
        $user->is_company = $request->is_company;
        $user->company_name = $request->company_name;
        $user->vat_type = $request->vat_type;
        $user->company_address = $request->company_address;
        $user->siret = $request->siret;

        $user->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function passwordUpdate(Request $request)
    {
        $password = Auth::user()->password;
        $oldpass = $request->oldpass;
        $newpass = $request->password;
        $confirm = $request->password_confirmation;
        if (Hash::check($oldpass, $password)) {
            if ($newpass === $confirm) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                $notification = array(
                    'messege' => 'Le mot de passe a été changé avec succès ! Connectez-vous maintenant avec votre nouveau mot de passe',
                    'alert-type' => 'success'
                );
                return Redirect('front/login/1')->with($notification);
            } else {
                $notification = array(
                    'messege' => 'Le nouveau mot de passe et la confirmation du mot de passe ne correspondent pas!',
                    'alert-type' => 'error'
                );
                return Redirect()->back()->with($notification);
            }
        } else {
            $notification = array(
                'messege' => 'Lancien mot de passe ne correspond pas!',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function getBadge()
    {
        $user = Auth::user();
        $title = 'Obtenir badge PRO';
        return view('front.settings.badge.get', compact('title', 'user'));
    }

    public function getBadgepro()
    {
        $title = 'Obtenir badge PRO';
        $user = Auth::user();
        return view('front.settings.badge.pro', compact('title', 'user'));
    }

    public function identity()
    {
        $user = Auth::user();
        $title = 'Preuve d\'identité';
        return view('front.settings.identity', compact('title', 'user'));
    }

    public function identityStore(Request $request)
    {
        $user = Auth::user();
        $user->euorpion = $request->euorpion;
        $user->identity_type = $request->identity_type;
        $user->security_no = $request->security_no;

        if ($request->hasfile('identity_document')) {
            $image1 = $request->file('identity_document');
            $name = time() . 'profileImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'profileImage/';
            $image1->move($destinationPath, $name);
            $user->identity_document = 'profileImage/' . $name;
        }
        $user->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function skills()
    {
        $user = Auth::user();
        $title = 'Compétences';
        $categories = Category::all();
        return view('front.settings.skills', compact('title', 'user', 'categories'));
    }

    public function portfolio()
    {
        $user = Auth::user();
        $title = 'Réalisation';
        $portfolio = Portfolio::where('jobber_id', $user->id)->get();
        return view('front.settings.portfolio', compact('title', 'user', 'portfolio'));
    }

    public function experience()
    {
        $user = Auth::user();
        $profile = JobberProfile::where('jobber_id', $user->id)->first();
        $title = 'Diplômes et expérience';
        $diplomas = Diploma::where('jobber_id', $user->id)->get();

        return view('front.settings.experience', compact('title', 'user', 'diplomas', 'profile'));
    }

    public function skillsSubmit(Request $request)
    {
        $user = Auth::user();
        if ($request->skills) {
            foreach ($request->skills as $skill) {
                $data[] = $skill;
                $user->skills = json_encode($data);
            }
        }
        $user->update();

        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function experienceStore(Request $request)
    {
        $exper = new Diploma();
        $exper->jobber_id = Auth::user()->id;
        $exper->title = $request->title;
        if ($request->hasfile('file')) {
            $image1 = $request->file('file');
            $name = time() . 'profileImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'profileImage/';
            $image1->move($destinationPath, $name);
            $exper->file = 'profileImage/' . $name;
        }
        $exper->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function portfolioStore(Request $request)
    {
        $portfolio = new Portfolio();
        $portfolio->jobber_id = Auth::user()->id;
        $portfolio->title = $request->title;
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(470, 250)->save(public_path('/images/' . $filename));
            $portfolio->file = '/images/' . $filename;
        }
        $portfolio->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function experienceupdate(Request $request)
    {
        $user = Auth::user();
        $profile = JobberProfile::where('jobber_id', $user->id)->first();
        $profile->experince = $request->experince;
        $profile->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function appAllcards(Request $request)
    {
        $card = Card::all();
        $title = 'Vos cartes';
        return view('front.settings.gift', compact('card', 'title'));
    }

    public function appSingleCards($id)
    {

        $card = Card::where('id', '=', $id)->first();
        $title = 'Carte unique';
        return view('front.card.index', compact('card', 'title'));
    }

    public function cardpay(Request $request, $id)
    {
        $total = $request->price;
        if (isset($total)) {
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $payment_intent = \Stripe\PaymentIntent::create([
                'amount' => ($total) * 100,
                'currency' => 'EUR'
            ]);
        }
        $intent = $payment_intent->client_secret;
        $r_name = $request->name;
        $r_email = $request->email;
        $senderphone = $request->senderphone;
        $sendername = $request->sendername;
        return view('front.card.checkout', compact('total', 'id', 'intent', 'r_name', 'r_email', 'senderphone', 'sendername'));
    }

    public function cardCheckout(Request $request, $id)
    {
        $item = Card::where('id', '=', $id)->first();
        $new = new CardPaymant();
        $new->card_id = $item->sku;
        $new->sendername = $request->sendername;
        $new->senderphone = $request->senderphone;
        $new->r_name = $request->r_name;
        $new->r_email = $request->email;
        $new->message = $request->message;
        $new->price = $request->total;
        $new->paymentstatus = '1';
        $new->card_number = rand(100000000, 900000000);
        $new->save();
        Mail::to($new->r_email)->send(new BonCadeau($new, $item));
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect('/app/allcards')->with($notification);;

    }

    public function redeeemVoucher(Request $request)
    {
        $cardspayment = CardPaymant::where('card_number', '=', $request->code)->where('valid', '=', '0')->first();

        if ($cardspayment) {
            if ($cardspayment->price >= $request->total) {

                $cardspayment->valid = '1';
                $cardspayment->update();

                $applicant_id = Auth::user();

                $proposal = Proposal::find($request->p_id);
                $proposal->status = 2;
                $proposal->update();

                $jobrequest = JobRequest::find($proposal->jobRequest_id);
                $jobrequest->status = 2;
                $jobrequest->update();

                $contract = new Contract();
                $contract->proposal_id = $request->p_id;
                $contract->jobRequest_id = $proposal->jobRequest_id;
                $contract->applicant_id = $applicant_id->id;
                $contract->jober_id = $proposal->jobber_id;
                $contract->e_time = $request->e_time;
                $contract->price = $proposal->price;
                $contract->description = $request->description;
                $contract->contract_no = 'CN-' . rand(10000, 90000);
                $contract->save();

                $payment = new Payment();
                $payment->contract_id = $contract->id;
                $payment->applicant_id = $applicant_id->id;
                $payment->jobber_id = $proposal->jobber_id;

                $payment->price = $request->total;
                $payment->contract_price = $proposal->price;
                $payment->percentage = 0;
                $payment->jobber_get = $request->total;

                $payment->type = 'gift card';
                $payment->invoice_no = 'IN-' . rand(10000, 90000);
                $payment->save();

                $activity = "Début du contrat";
                $msg = "Votre contrat commence avec le demandeur";

                NotificationHelper::pushNotification($msg, $proposal->jobber->device_token, $activity);
                NotificationHelper::addtoNitification($applicant_id->id, $proposal->jobber_id, $msg, $contract->id, $activity, $applicant_id->country);

                return view('front.payment.success', compact('contract'));

            } else {
                $notification = array(
                    'messege' => 'Votre montant supérieur au portefeuille',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }

        } else {
            $notification = array(
                'messege' => 'Le code promo nest plus valide',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function appLogout()
    {
        Auth::logout();
        $id = 1;
        return view('front.auth.login', compact('id'));
    }

    public function appBalanceIndex()
    {
        return view('front.balance.index');
    }

    public function appBalanceDetails()
    {
        $walet = Walet::where('user_id', '=', Auth::user()->id)->latest()->get();

        return view('front.balance.detials', compact('walet'));
    }

    public function payment(Request $request)
    {
        $user = Auth::user();
        $balancee = CardPaymant::where('paymentstatus', '=', 1)->where('card_number', '=', $request->code)->first();
        if ($balancee) {

            $balance = $balancee->price;

            $walet = new Walet();
            $walet->balance = $balance;
            $walet->user_id = $user->id;

            if ($walet->save()) {
                $balancee->paymentstatus = 2;
                $balancee->update();
            }

            $user->walet = $user->walet + $balance;
            $user->update();
            $notification = array(
                'messege' => 'Ajouter une carte-cadeau dans votre portefeuille',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Invalider le code de votre carte cadeau',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }

    public function addWalet(Request $request)
    {
        $user = Auth::user();
        $walet = new Walet();
        $walet->balance = $request->balance;
        $walet->user_id = $user->id;
        $walet->save();

        $user->walet = $user->identity + $request->balance;
        $user->update();
        return view('front.balance.success');

    }

    public function addCheck(Request $request)
    {
        $check = new Check();
        $check->user_id = Auth::user()->id;
        if ($request->hasfile('img')) {
            $image1 = $request->file('img');
            $name1 = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name1);
            $check->img = 'img/' . $name1;
        }
        $check->save();

        $notification = array(
            'messege' => 'Votre administrateur d\'envoi de données',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

    }

    public function appCalander()
    {
        $title = 'Événement';
        $contract = Events::where('jober_id', '=', Auth::user()->id)->get();
        return view('front.jobber.calander.index', compact('contract', 'title'));
    }

    public function appEventStore(Request $request)
    {
        $event = new Events();
        $event->title = $request->title;
        $event->jober_id = Auth::user()->id;
        $event->e_time = $request->e_time;
        $event->price = $request->price;
        $event->contract_id = 0;
        $event->save();
        $notification = array(
            'messege' => 'Votre événement Ajouter',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function appEventView($id)
    {
        $contract = Events::find($id);
        $title = $contract->title;
        return view('front.jobber.calander.details', compact('contract', 'title'));

    }

    public function appSubscription()
    {
        $title = 'Abonnement';
        $subscription = Subscribe::all();
//        $user->newSubscription('default', $request->plan)->create($request->paymentMethodId);
        return view('front.jobber.subscription.index', compact('title', 'subscription'));
    }

    public function appPaySubscription($id)
    {

        $sub = Subscribe::find($id);
        $title = $sub->name;
        $total = $sub->price;
        $user= Auth::user();
        $intent = $user->createSetupIntent();

//        if (isset($total)) {
//            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
//            $payment_intent = \Stripe\PaymentIntent::create([
//                'amount' => ($total) * 100,
//                'currency' => 'EUR'
//            ]);
//        }
//        $intent = $payment_intent->client_secret;
        return view('front.jobber.subscription.paymant', compact('intent', 'sub', 'title','total'));

    }

    public function appSubscriptionCheckout(Request $request,$id)
    {
        $subscription = Subscribe::where('price','=',$request->total)->first();
        $user = Auth::user();
        $sub = new Subpaymant();
        $sub->sub_id = $subscription->id;
        $sub->user_id = Auth::user()->id;
        $sub->price = $request->total;
        $sub->key_id = $request->plan;
        $sub->card_holder_name = $request->card_holder_name;
        $sub->paymentMethodId = $request->paymentMethodId;
        $sub->message = $request->message;

        if($sub->save())
        {
            $user = User::find($sub->user_id);
            $user->subscription = $subscription->id;
            $user->paymant_id = $sub->id;
            $user->sub_date = $sub->created_at;
            $user->offers = 0;
            $user->update();
        }
        $user->newSubscription('main', $request->plan)->create($request->paymentMethodId);

        $notification = array(
            'messege' => 'Abonnement actif!',
            'alert-type' => 'success'
        );
        return redirect()->route('app.subscription')->with($notification);


    }
    public function appSubscriptionDetails()
    {   $title ="Détails de l'abonnement";
        $paymant = Subpaymant::where('user_id','=',Auth::user()->id)->latest()->get();

        return view('front.jobber.subscription.details', compact('paymant',  'title'));
    }
}

