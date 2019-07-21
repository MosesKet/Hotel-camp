<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
   public function contactUS()
   {
       return view('pages.contact');
   }
   
   /* public function contactUsPost(Request $request)
   {
		$this->validate($request, [
		'name' => 'required',
		'surname' => 'required',
		'email' => 'required|email',
		'phone' => 'required|phone',
		'message' => 'required',
		]);
		ContactUs::create($request->all());
		return back()->with('success', 'Thanks for contacting us!');
 	} */

   public function contactUsPost()
   {
       $data = request()->validate([
		'name' => 'required',
		'surname' => 'required',
		'email' => 'required|email',
		'phone' => 'required|min:7',
		'message' => 'required',
		]);
		
		Mail::to('sirketxp@gmail.com')->send(new ContactUsMail($data));
		return redirect('contact')->with('success', 'Thanks for contacting us!');
   }
}
