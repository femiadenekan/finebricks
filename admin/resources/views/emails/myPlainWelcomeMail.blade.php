@component('mail::message')
	
# Hello {{Auth::user()->firstname}},

This is to notify you that you have successfully registered with {{ config('app.name') }}.

Your referral link is: <b> {{URL('register/'.Auth::user()->code)}} </b>. 

You can share this link to refer users.

Please feel free to reply this mail if you need to make further enquiries.

Regards,<br>

{{ config('app.name') }} Team
@endcomponent
