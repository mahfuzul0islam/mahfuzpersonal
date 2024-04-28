<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\ContactMe;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function ContactIndex(){
        $messages = ContactMe::latest()->get();
        return view('admin.pages.contact',compact('messages'));
    }
    public function DeleteMessage($id){
        $messages = ContactMe::find($id);
        $messages->delete();
        $notification = array(
            'message' => 'Message Deleted successfully',
            'alert-type' => 'danger'
        );
        return redirect(route('admin.contacts'))->with($notification);
    }
}
