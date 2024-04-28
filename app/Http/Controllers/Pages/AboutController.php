<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\CurtainAddress;
use App\Models\Skill;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AboutIndex(){
        $skills = Skill::latest()->take(5)->get();
        $address = CurtainAddress::first();
        $about = About::first();
        return view('admin.pages.about',compact('skills','address','about'));
    }
    //skills part here 
    public function StoreSkills(Request $request){
        $validated = $request->validate([
            'title' => 'required|unique:skills|max:255',
            'duration' => 'required',
        ]);
        $data = new Skill;
        $data->title = $request->title;
        $data->duration = $request->duration;
        $data->save();
        $notification = array(
            'message' => 'My expertise and skills Data Added successfully',
            'alert-type' => 'success'
        );
        return redirect(route('admin.abouts'))->with($notification);
    }
    public function DeleteSkills($id){
        $skill = Skill::find($id);
        $skill->delete();
        $notification = array(
            'message' => 'My expertise and skills Data Deleted successfully',
            'alert-type' => 'danger'
        );
        return redirect(route('admin.abouts'))->with($notification);
    }
    //address part here
    public function UpdateAddress(Request $request,$id){
        $validated = $request->validate([
            'address' => 'required|unique:curtain_addresses|max:255',
        ]);
        $address = CurtainAddress::find($id);
        $address->address = $request->address;
        $address->save();
        $notification = array(
            'message' => 'Current Address Updated successfully',
            'alert-type' => 'success'
        );
        return redirect(route('admin.abouts'))->with($notification);
    }
    //about part here
    public function UpdateAbouts(Request $request,$id){
        $about = About::find($id);
        $about->title = $request->title;
        $about->description = $request->description;
        $about->link = $request->link;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/images/' . $about->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $about['image'] = $filename;
        }
        $about->save();
        $notification = array(
            'message' => 'Abouts Section Updated successfully',
            'alert-type' => 'success'
        );
        return redirect(route('admin.abouts'))->with($notification);
    }
}
