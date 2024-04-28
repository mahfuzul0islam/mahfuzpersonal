<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;
use Str;

class WorkController extends Controller
{
    public function index(){
        $works = Work::latest('updated_at')->get();
        return view('admin.pages.mywork',compact('works'));
    }
    public function AddWorkIndex(){
        return view('admin.pages.addwork');
    }
    public function StoreWork(Request $request){
        $validated = $request->validate([
            'work_title' => 'required',
            'title_image' => 'required',
        ]);
        $data = new Work;
        $data->work_title = $request->work_title;
        $data->work_title_slug = Str::slug($request->work_title) ;
        $data->working_dates = $request->working_dates;
        $data->client = $request->client;
        $data->website = $request->website;
        $data->First_title = $request->First_title;
        $data->First_detail = $request->First_detail;
        $data->second_title = $request->second_title;
        $data->second_detail = $request->second_detail;
        $data->third_title = $request->third_title;
        $data->third_detail = $request->third_detail;
        $data->forth_title = $request->forth_title;
        $data->forth_detail = $request->forth_detail;
        $data->fifth_title = $request->fifth_title;
        $data->fifth_detail = $request->fifth_detail;

        if ($request->file('title_image')) {
            $file = $request->file('title_image');
            @unlink(public_path('upload/images/' . $data->title_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['title_image'] = $filename;
        }
        if ($request->file('First_image')) {
            $file = $request->file('First_image');
            @unlink(public_path('upload/images/' . $data->First_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['First_image'] = $filename;
        }
        if ($request->file('second_image')) {
            $file = $request->file('second_image');
            @unlink(public_path('upload/images/' . $data->second_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['second_image'] = $filename;
        }
        if ($request->file('third_image')) {
            $file = $request->file('third_image');
            @unlink(public_path('upload/images/' . $data->third_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['third_image'] = $filename;
        }
        if ($request->file('forth_image')) {
            $file = $request->file('forth_image');
            @unlink(public_path('upload/images/' . $data->forth_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['forth_image'] = $filename;
        }
        if ($request->file('fifth_image')) {
            $file = $request->file('fifth_image');
            @unlink(public_path('upload/images/' . $data->fifth_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['fifth_image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'A New Word Data Added successfully',
            'alert-type' => 'success'
        );
        return redirect(route('admin.work'))->with($notification);
    }
    
    public function EditWork($id){
        $work = Work::findOrFail($id);
        return view('admin.pages.editwork',compact('work'));
    }
    public function UpdateWork(Request $request,$id){
        
        
        $data = Work::findOrFail($id);
        $data->work_title = $request->work_title;
        $data->work_title_slug = Str::slug($request->work_title) ;
        $data->working_dates = $request->working_dates;
        $data->client = $request->client;
        $data->website = $request->website;
        $data->First_title = $request->First_title;
        $data->First_detail = $request->First_detail;
        $data->second_title = $request->second_title;
        $data->second_detail = $request->second_detail;
        $data->third_title = $request->third_title;
        $data->third_detail = $request->third_detail;
        $data->forth_title = $request->forth_title;
        $data->forth_detail = $request->forth_detail;
        $data->fifth_title = $request->fifth_title;
        $data->fifth_detail = $request->fifth_detail;

        if ($request->file('title_image')) {
            $file = $request->file('title_image');
            @unlink(public_path('upload/images/' . $data->title_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['title_image'] = $filename;
        }
        if ($request->file('First_image')) {
            $file = $request->file('First_image');
            @unlink(public_path('upload/images/' . $data->First_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['First_image'] = $filename;
        }
        if ($request->file('second_image')) {
            $file = $request->file('second_image');
            @unlink(public_path('upload/images/' . $data->second_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['second_image'] = $filename;
        }
        if ($request->file('third_image')) {
            $file = $request->file('third_image');
            @unlink(public_path('upload/images/' . $data->third_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['third_image'] = $filename;
        }
        if ($request->file('forth_image')) {
            $file = $request->file('forth_image');
            @unlink(public_path('upload/images/' . $data->forth_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['forth_image'] = $filename;
        }
        if ($request->file('fifth_image')) {
            $file = $request->file('fifth_image');
            @unlink(public_path('upload/images/' . $data->fifth_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['fifth_image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Word Data Updated successfully',
            'alert-type' => 'success'
        );
        return redirect(route('admin.work'))->with($notification);
    }
    public function DeleteWork($id){
        $work = Work::find($id);
        $work->delete();
        $notification = array(
            'message' => 'Word Data Deleted successfully',
            'alert-type' => 'danger'
        );
        return redirect(route('admin.work'))->with($notification);
    }

}
