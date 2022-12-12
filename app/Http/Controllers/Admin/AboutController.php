<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use toastr;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$id = Auth::user()->id;
        $aboutData = About::find(1);
        //$aboutData = About::all();
        return view('admin.about.index',compact('aboutData'));
    }

    public function edit()
    {
        $id = Auth::user()->id;
        $edit = About::find($id);
        return view('admin.about.edit',compact('edit'));
    }

    public function updateAbout(Request $request)
    {
        $id = Auth::user()->id;
        $data = About::find($id);
        $data->title = $request->title;
        $data->short_title = $request->short_title;
        $data->short_details = $request->short_details;
        $data->long_details = $request->long_details;

        if ($request->hasfile('image'))
        {
            $destination = 'upload/about/'.$data->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            //$extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('upload/about/',$filename);
            $data->image = $filename;
        }
        $data->update();
        $notification = array(
            'messege' => 'Great ! Data updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('view.about')->with($notification);
    }
}
