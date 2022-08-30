<?php

namespace App\Jobs;

use App\Mail\Facture;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\UserRegister;
use Mail;

class UserRegisterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $dataa;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($dataa)
    {
        $this->dataa =$dataa;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->dataa['email'])->send(new UserRegister($this->dataa));
    }
}
