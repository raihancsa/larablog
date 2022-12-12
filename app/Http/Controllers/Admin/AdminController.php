<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;
use toastr;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification = array(
            'messege' => 'User logout successfully',
            'alert-type' => 'success'
        );
        return redirect('/login')->with($notification);
    }

    public function viewProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        //$user = DB::table('users')->get();
        return view('admin.admin_profile',compact('adminData'));
    }

    public function edit()
    {
        $id = Auth::user()->id;
        $edit = User::find($id);
        return view('admin.edit_profile',compact('edit'));
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;

        if ($request->hasfile('image'))
        {
            $destination = 'upload/admin/'.$data->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            //$extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('upload/admin/',$filename);
            $data->image = $filename;
        }
        $data->update();
        $notification = array(
            'messege' => 'Great ! Data updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('view.profile')->with($notification);
    }

    public function changePassword()
    {
        return view('admin.change_password');
    }

    public function updatePassword(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            $notification = array(
                'messege' => 'Password Updated Successfully',
                'alert-type' => 'success'
            );
            //session()->flash('message','Password Updated Successfully');
            return redirect()->back()->with($notification);
        } else {
            session()->flash('message','Current Password Not Match !');
            return redirect()->back();
        }
    }
}
