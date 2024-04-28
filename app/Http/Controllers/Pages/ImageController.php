<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //banner image part here
    public function BannerImage()
    {
        $images = Image::latest('updated_at')->first();
        return view('admin.pages.images', compact('images'));

    }
    public function UpdateImage(Request $request, $id)
    {
        $data = Image::find($id);
        if ($request->file('my_image')) {
            $file = $request->file('my_image');
            @unlink(public_path('upload/images/' . $data->my_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['my_image'] = $filename;
        }
        if ($request->file('banner_image')) {
            $file = $request->file('banner_image');
            @unlink(public_path('upload/images/' . $data->banner_image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['banner_image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Image Updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    //post part here 
    public function PostIndex()
    {
        $posts = Post::latest()->get();
        return view('admin.pages.post',compact('posts'));
    }
    public function PostStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'discription' => 'required',
            'post_link' => 'required',
        ]);
        $data = new Post;
        $data->title = $request->title;
        $data->discription = $request->discription;
        $data->post_link = $request->post_link;
        $data->posted_on = $request->posted_on;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/images/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Post Added successfully',
            'alert-type' => 'success'
        );
        return redirect(route('admin.posts'))->with($notification);
    }
    public function PostDelete($id){
        $post = Post::find($id);
        $post->delete();
        $notification = array(
            'message' => 'Post Deleted successfully',
            'alert-type' => 'danger'
        );
        return redirect(route('admin.posts'))->with($notification);

    }

}
