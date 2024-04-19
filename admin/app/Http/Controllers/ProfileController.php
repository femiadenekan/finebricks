<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator,Redirect,Response,File;
Use Image;

use Intervention\Image\Exception\NotReadableException;
use Auth;
use App\User;
use DB;




class ProfileController extends Controller
{
    public function edit()
    {
	    return view('edit-profile2');
    }     
	
	public function realtors()
    {
	    $users = User::orderby('created_at', 'desc')->paginate(120);
		
		return view('all', compact('users'));
    }    
	
	public function refrealtors($slug)
    {
	   

	$userscode = User::where('slug', '=', $slug)->first();
	//dd($userscode);

	   $users = User::where('referral_code', '=', $userscode->code)->orderby('created_at', 'desc')->paginate(120);
		
		return view('all', compact('users', 'userscode'));
    }    
	
	
	
	public function user($slug)
    {
	    $tes = User::where('slug', '=', $slug)->first();
		//dd(strtoupper('ff'));
		$user = User::where('slug', '=', $slug)->first();
		$refusers = User::where('referral_code', '=', $tes->code)->orderby('created_at', 'desc')->get();
		//dd($refusers);
		
		return view('user', compact('user','refusers'));
    }
	
	
	
	
	
		public function update(Request $request)
    {
		
		
		
		$id = Auth::user()->id;
		
		
        $updateData = $request->validate([
           
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
		
		$users = User::find($id);
      
        $users->about =  $request->about;
        $users->location =  $request->location;
        $users->address =  $request->address;
		$users->mobile =  $request->mobile;
		$users->whatsapp =  $request->whatsapp;
        $users->firstname =  $request->firstname;
        $users->lastname =  $request->lastname;
        $users->dob =  $request->dob;
        
		
		
		$users->bankname =  $request->bankname;
		$users->account_name =  $request->account_name;
		$users->account_number =  $request->account_number;
		
		
		$users->facebook =  $request->facebook;
		$users->instagram =  $request->instagram;
		$users->twitter =  $request->twitter;
		$users->linkedin =  $request->linkedin;
		if ($request->has('profile_image')) {

			
			
			
			$files = $request->file('profile_image');
			// for save original image
				$ImageUpload = Image::make($files);
				$originalPath = 'images/originals/';
				$ImageUpload->save($originalPath.time().$files->getClientOriginalName());
				 
				// for save thumnail image
				$thumbnailPath = 'images/thumbnails/';
				$ImageUpload->resize(300,300);
				$ImageUpload = $ImageUpload->save($thumbnailPath.time().$files->getClientOriginalName());
			 
			  
			  $users->image = 'images/thumbnails/'.time().$files->getClientOriginalName();
			
				
			
        }
		$users->save();
       
	   
	   
		
       
        return redirect('/edit-profile')->with('completed', 'User has been updated');
    }
	
	
	
	public function register($ref)
    {
		$refcode = $ref;
		 $users = User::where('code', $refcode)->first();
		 //dd($users);
		
      return view('auth.register', compact('refcode', 'users'));
    }
	
	public function dashboard()
    {
		$allusers = User::orderby('created_at', 'desc')->with('ref', 'referred')->get();
		//dd($allusers);
		
		
		//$allusers = User::orderby('created_at', 'desc')->paginate(10);
		$users = User::where('referral_code', '=', Auth::User()->code)->orderby('created_at', 'desc')->get();
		
		
		//dd($allusers);
	  return view('dashboard', compact('users', 'allusers'));
    }	
	
	
	public function updateDownlineView()
    {
		$allusers = User::orderby('created_at', 'desc')->with('ref', 'referred')->get();
		//dd($allusers);
		
		
		//dd($allusers);
	  return view('updatedownlineview', compact('allusers'));
    }
	
	public function updateUpline($id)
    {
		$user = User::where('id', $id)->with('ref', 'referred')->first();
		//dd($user);
		
		$allusers = User::orderby('firstname', 'asc')->get();
		//dd($allusers);
	  return view('updateupline', compact('user', 'allusers'));
    }
	
	
		
	
		public function uplineupdate(Request $request)
    {
		
		
		
		$id = $request->userid;
		
		
        
		
		$users = User::find($id);
      
        $users->referral_code =  $request->newref;
       
		$users->save();
       
	   
	   
		
       
        return redirect('/up-down-line')->with('completed', 'Student has been updated');
    }
	
	
}
