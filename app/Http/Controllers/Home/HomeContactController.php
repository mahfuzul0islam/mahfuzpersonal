<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ContactMe;
use App\Models\CurtainAddress;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeContactController extends Controller
{
    public function HomeContact()
    {
        $address = CurtainAddress::first();
        $image = Image::first();
        return view('home.pages.contact',compact('address','image'));
    }
    public function ContactStore(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|max:255',
            'email' => 'required|max:255',
            'message' => 'required',
        ]);
        $contact = new ContactMe;
        $contact->first_name = $request->first_name;
        $contact->topic = $request->topic;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        $notification = array(
            'message' => 'Message Send',
            'alert-type' => 'success'
        );
        return redirect(route('home.contact'))->with($notification);
    }
}
