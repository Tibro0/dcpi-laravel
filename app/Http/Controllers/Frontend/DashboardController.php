<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class DashboardController extends Controller
{
    public function index(){
        return view('frontend.dashboard.index');
    }

    public function dashboardUpdateProfile(Request $request){
        $request->validate([
            'avatar' => ['nullable', 'image', 'max:3000'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'unique:users,email,'.Auth::user()->id],
            'phone' => ['nullable', 'max:255'],
            'address' => ['nullable', 'max:255'],
            'department' => ['nullable', 'max:255', 'in:Civil,Electrical,Computer,Electronics,Telecommunication'],
            'semester' => ['nullable', 'max:255', 'in:1st,2nd,3rd,4th,5th,6th,7th,8th'],
            'student_type' => ['nullable', 'max:255', 'in:Regular,Irregular'],
            'session' => ['nullable', 'max:255'],
        ]);

        $oldImage = $request->old_avatar;
        if ($request->file('avatar')) {
            $image = $request->file('avatar');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(500,500);
            $img->toPng()->save(base_path('public/uploads/profile_image/'.$name_gen));
            $save_url = 'uploads/profile_image/'.$name_gen;

            $user = Auth::user();
            $user->avatar = $save_url;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->department = $request->department;
            $user->semester = $request->semester;
            $user->student_type = $request->student_type;
            $user->session = $request->session;
            $user->save();

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Updated Successfully');
            return redirect()->back();
        }else{
            $user = Auth::user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->department = $request->department;
            $user->semester = $request->semester;
            $user->student_type = $request->student_type;
            $user->session = $request->session;
            $user->save();

            toastr()->success('Updated Successfully');
            return redirect()->back();
        }
    }
}
