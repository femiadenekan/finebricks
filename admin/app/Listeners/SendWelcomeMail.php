<?php

namespace App\Listeners;
use App\Mail\WelcomeMail;
use App\Mail\PlainWelcomeMail;
use Illuminate\Support\Facades\Mail;
use Auth;
use App\User;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendWelcomeMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        
            $users = User::where('code', Auth::User()->referral_code)->first();
		
			
			if (empty($users)) {
			
		
						Mail::to(Auth::User()->email)->send(new PlainWelcomeMail());
			
			} else  {
			
			$details = [

        'name' => $users->firstname.' '.$users->lastname,

        'mobile' => $users->mobile
						];
	
		
						Mail::to(Auth::User()->email)->send(new WelcomeMail($details));
			}
    }
}
