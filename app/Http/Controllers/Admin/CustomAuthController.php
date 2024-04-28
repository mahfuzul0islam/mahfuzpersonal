<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function ProfileIndex()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('admin.pages.profile', compact('user'));
    }

    public function ProfileUpdate(Request $request)
    {
        
        $notification = array(
            'message' => 'Profile Updated',
            'alert-type' => 'success'
        );
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->back()->with($notification);
    }
}
