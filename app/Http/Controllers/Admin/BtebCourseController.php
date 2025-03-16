<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BtebCourseDataTable;
use App\Http\Controllers\Controller;
use App\Models\BtebCourse;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

class BtebCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BtebCourseDataTable $dataTable)
    {
        return $dataTable->render('admin.bteb-course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bteb-course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' =>['required', 'image', 'max:2000'],
            'name' => ['required', 'max:255', 'unique:bteb_courses,name'],
            'month' => ['required', 'max:255'],
            'duration' => ['required', 'max:255'],
            'course_fee' => ['required', 'max:255'],
            'short_description' => ['required', 'max:255'],
            'long_description' => ['required'],
            'priority_number' => ['required', 'integer'],
            'status' => ['required', 'boolean'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(1110,555);
            $img->toPng()->save(base_path('public/uploads/bteb_course_image/'.$name_gen));
            $save_url = 'uploads/bteb_course_image/'.$name_gen;

            $btebCourse = new BtebCourse();
            $btebCourse->image = $save_url;
            $btebCourse->name = $request->name;
            $btebCourse->slug = Str::slug($request->name);
            $btebCourse->month = $request->month;
            $btebCourse->duration = $request->duration;
            $btebCourse->course_fee = $request->course_fee;
            $btebCourse->short_description = $request->short_description;
            $btebCourse->long_description = $request->long_description;
            $btebCourse->priority_number = $request->priority_number;
            $btebCourse->status = $request->status;
            $btebCourse->save();

            toastr()->success('Created Successfully');
            return redirect()->route('admin.bteb-course.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $btebCourse = BtebCourse::findOrFail($id);
        return view('admin.bteb-course.edit', compact('btebCourse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' =>['nullable', 'image', 'max:2000'],
            'name' => ['required', 'max:255', 'unique:bteb_courses,name,'.$id],
            'month' => ['required', 'max:255'],
            'duration' => ['required', 'max:255'],
            'course_fee' => ['required', 'max:255'],
            'short_description' => ['required', 'max:255'],
            'long_description' => ['required'],
            'priority_number' => ['required', 'integer'],
            'status' => ['required', 'boolean'],
        ]);

        $oldImage = $request->old_image;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(1110,555);
            $img->toPng()->save(base_path('public/uploads/bteb_course_image/'.$name_gen));
            $save_url = 'uploads/bteb_course_image/'.$name_gen;

            $btebCourse = BtebCourse::findOrFail($id);
            $btebCourse->image = $save_url;
            $btebCourse->name = $request->name;
            $btebCourse->slug = Str::slug($request->name);
            $btebCourse->month = $request->month;
            $btebCourse->duration = $request->duration;
            $btebCourse->course_fee = $request->course_fee;
            $btebCourse->short_description = $request->short_description;
            $btebCourse->long_description = $request->long_description;
            $btebCourse->priority_number = $request->priority_number;
            $btebCourse->status = $request->status;
            $btebCourse->save();

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.bteb-course.index');
        }else{
            $btebCourse = BtebCourse::findOrFail($id);
            $btebCourse->name = $request->name;
            $btebCourse->slug = Str::slug($request->name);
            $btebCourse->month = $request->month;
            $btebCourse->duration = $request->duration;
            $btebCourse->course_fee = $request->course_fee;
            $btebCourse->short_description = $request->short_description;
            $btebCourse->long_description = $request->long_description;
            $btebCourse->priority_number = $request->priority_number;
            $btebCourse->status = $request->status;
            $btebCourse->save();

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.bteb-course.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $btebCourse = BtebCourse::findOrFail($id);
        unlink($btebCourse->image);
        $btebCourse->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
