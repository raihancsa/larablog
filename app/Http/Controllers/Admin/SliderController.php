<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use toastr;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$id = Auth::user()->id;
        $sliderData = Slider::find(1);
        //$sliderData = Slider::all();
        return view('admin.slider.index',compact('sliderData'));
    }

    public function edit()
    {
        $id = Auth::user()->id;
        $edit = Slider::find($id);
        return view('admin.slider.edit',compact('edit'));
    }

    public function updateSlider(Request $request)
    {
        $id = Auth::user()->id;
        $data = Slider::find($id);
        $data->title = $request->title;
        $data->short_title = $request->short_title;
        $data->video_url = $request->video_url;

        if ($request->hasfile('image'))
        {
            $destination = 'upload/slider/'.$data->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            //$extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('upload/slider/',$filename);
            $data->image = $filename;
        }
        $data->update();
        $notification = array(
            'messege' => 'Great ! Data updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('slider.list')->with($notification);
    }


}
