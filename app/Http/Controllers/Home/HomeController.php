<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Image;
use App\Models\Post;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeIndex(){
        $image = Image::first();
        $skills = Skill::latest()->take(6)->get();
        $works = Work::latest('updated_at')->take(6)->get();
        $posts = Post::latest()->get();
        return view('home.home',compact('image','skills','works','posts'));
    }
    public function HomeWork(){
        $image = Image::first();
        $works = Work::latest('updated_at')->get();
        return view('home.pages.works',compact('image','works'));
    }
    public function HomeWorkSingle($id){
        $image = Image::first();
        $works = Work::latest('updated_at')->take(6)->get();
        $singlework =  Work::find($id);
        return view('home.pages.worksingle',compact('singlework','works','image'));
    }
    public function HomePost(){
        $image = Image::first();
        $posts = Post::latest()->get();
        return view('home.pages.posts',compact('posts','image'));
    }
    public function HomeTerms(){
        $image = Image::first();
        return view('home.pages.terms',compact('image'));
    }
    public function HomeAbout(){
        $skills = Skill::latest()->take(6)->get();
        $image = Image::first();
        $about = About::first();
        return view('home.pages.about',compact('skills','image','about'));
    }

}
