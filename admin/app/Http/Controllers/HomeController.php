<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', 'verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/');
    }

    public function WelcomeMail()
    {
	 $users = User::where('code', Auth::User()->referral_code)->first();
			
			
			$details = [

        'name' => $users->firstname.' '.$users->lastname,

        'mobile' => $users->mobile
						];
						
		return $details;
	
    }
}
