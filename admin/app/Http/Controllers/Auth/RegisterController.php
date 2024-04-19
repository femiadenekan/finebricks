<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'mobile' => ['numeric'],
            'whatsapp' => ['numeric'],
            'account_number' => ['numeric'],
           
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            
            'password' => ['required', 'string', 'min:8', 'confirmed'],
			//'code' => ['confirmed'],
			//'code' => ['exists:users,code'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
		
		$randomId = rand(1000,9999);
		$initials = substr($data['firstname'], 0, 3);
		$refcode = $initials.''.$randomId;
		
		$slugId = rand(1,99);
		$slug = $data['firstname'].'-'.$data['lastname'].'-'.$slugId;
		//dd($data);
		
		
				if($data['code']==""){
					$usercode = "GRNREF";
				}
				else{
					
					$usercode = $data['code'];
				}
		
		return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            
            'mobile' => $data['mobile'],
            'whatsapp' => $data['whatsapp'],
            'location' => $data['location'],
			
			
            'bankname' => $data['bank'],
            'account_name' => $data['account_name'],
            'account_number' => $data['account_number'],
           
            'code' => strtoupper($refcode),
            
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
			'image' => 'images/avatar.jpg',
			
			
			'slug' => $slug,
			'referral_code' => $usercode,
			'address' => $data['address'],
			'dob' => $data['dob'],
			
			
			
			
        ]);
    }
	

}
