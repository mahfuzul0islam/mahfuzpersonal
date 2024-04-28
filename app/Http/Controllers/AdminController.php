<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CurtainAddress;
use App\Models\Image;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $image = Image::first();
        $works = Work::latest('updated_at')->take(4)->select('work_title', 'title_image')->get();
        $about = About::first();
        $skills = Skill::latest()->take(8)->get();
        $address = CurtainAddress::first();
        return view('admin.dashboard',compact('image','works','about','skills','address'));
    }
}
