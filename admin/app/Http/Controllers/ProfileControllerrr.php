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
	    $users = User::orderby('created_at', 'desc')->paginate(10);
		
		return view('all', compact('users'));
    }    
	
	public function refrealtors($slug)
    {
	   

	$userscode = User::where('slug', '=', $slug)->first();
	//dd($userscode);

	   $users = User::where('referral_code', '=', $userscode->code)->orderby('created_at', 'desc')->paginate(10);
		
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
       
	   
	   
		
       
        return redirect('/edit-profile')->with('completed', 'Student has been updated');
    }
	
	
	
	public function register($ref)
    {
		$refcode = $ref;
      return view('auth.register', compact('refcode'));
    }
	
	public function dashboard()
    {
		$allusers = User::orderby('created_at', 'desc')->with('ref', 'coderef')->get();
		//dd($allusers->offsetGet(6)->coderef->firstname);
		//dd($allusers);
		
		
		//$allusers = User::orderby('created_at', 'desc')->paginate(10);
		$users = User::where('referral_code', '=', Auth::User()->code)->orderby('created_at', 'desc')->get();
	  return view('dashboard', compact('users', 'allusers'));
    }
}
