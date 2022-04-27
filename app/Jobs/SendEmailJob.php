<?php
//
//namespace App\Jobs;
//
//use Illuminate\Bus\Queueable;
//use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Foundation\Bus\Dispatchable;
//use Illuminate\Queue\InteractsWithQueue;
//use Illuminate\Queue\SerializesModels;
//
//class SendEmailJob implements ShouldQueue
//{
//    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
//
//    /**
//     * Create a new job instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        //
//    }
//
//    /**
//     * Execute the job.
//     *
//     * @return void
//     */
//    public function handle()
//    {
//        //
//    }
//}


namespace App\Jobs;

use App\Mail\DraftJobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email_list;
    protected $draft;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email_list, $draft)
    {
        // dd($email_list->name);

        $this->email_list = $email_list;
        $this->draft = $draft;


        // $this->name = $email_list->name;

        // dd($this->email_list ,$this->msg );
        // Mail::to($this->email_list)->send($email);

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // $email = new CustomerMail();
        // $msg = '123';

        Mail::to($this->email_list)->send(new DraftJobs($this->draft));

    }
}
