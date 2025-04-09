<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AllStudentDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AllStudentController extends Controller
{
    public function allStudentIndex(AllStudentDataTable $dataTable){
        return $dataTable->render('admin.student.index');
    }

    public function edit(string $id){
        $student = User::findOrFail($id);
        return view('admin.student.edit', compact('student'));
    }

    public function update(Request $request, string $id){
        $request->validate([
            'avatar' => ['nullable', 'image', 'max:3000'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,'.$id],
            'phone' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'department' => ['required', 'max:255'],
            'semester' => ['required', 'max:255'],
            'student_type' => ['required', 'max:255'],
            'session' => ['required', 'max:255'],
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

            $student = User::findOrFail($id);
            $student->avatar = $save_url;
            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->address = $request->address;
            $student->department = $request->department;
            $student->semester = $request->semester;
            $student->student_type = $request->student_type;
            $student->session = $request->session;
            $student->password = Hash::make($request->password);
            $student->save();

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Updated Successfully!');
            return redirect()->route('admin.student.index');
        }else{
            $student = User::findOrFail($id);
            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->address = $request->address;
            $student->department = $request->department;
            $student->semester = $request->semester;
            $student->student_type = $request->student_type;
            $student->session = $request->session;
            $student->password = Hash::make($request->password);
            $student->save();

            toastr()->success('Updated Successfully!');
            return redirect()->route('admin.student.index');
        }
    }

    public function destroy(string $id){
        $student = User::findOrFail($id);
        unlink($student->avatar);
        $student->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
