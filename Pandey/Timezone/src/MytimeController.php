<?php

namespace Pandey\Timezone;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Pandey\Timezone\models\Contact;
class MytimeController extends Controller
{
    public function index()
	{
		return view('Timezone::contact_us');
	}
	
	public function store(Request $request)
	{
			$name=$request->name;
			$email=$request->email;
			$contact=new Contact();
			$contact->name=$name;
			$contact->email=$email;
			$contact->save();
			
			
	}
	
	
}
