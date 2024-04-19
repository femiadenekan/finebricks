<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        	View::composer(['layouts.partials.subnav'],function($view){
								
											
											if (Auth::check()){
											
											$count = User::where('referral_code', '=', Auth::User()->code)->orderby('created_at', 'desc')->count();
										
											//dd($town);		
										$view->with(['count' => $count]);
										
											}
										    

											
										
									
								});
	
	}
}
