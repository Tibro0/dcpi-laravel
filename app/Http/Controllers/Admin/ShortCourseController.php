<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ShortCourseDataTable;
use App\Http\Controllers\Controller;
use App\Models\ShortCourse;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

class ShortCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ShortCourseDataTable $dataTable)
    {
        return $dataTable->render('admin.short-course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.short-course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' =>['required', 'image', 'max:2000'],
            'name' => ['required', 'max:255', 'unique:short_courses,name'],
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
            $img->toPng()->save(base_path('public/uploads/short_course_image/'.$name_gen));
            $save_url = 'uploads/short_course_image/'.$name_gen;

            $shortCourse = new ShortCourse();
            $shortCourse->image = $save_url;
            $shortCourse->name = $request->name;
            $shortCourse->slug = Str::slug($request->name);
            $shortCourse->month = $request->month;
            $shortCourse->duration = $request->duration;
            $shortCourse->course_fee = $request->course_fee;
            $shortCourse->short_description = $request->short_description;
            $shortCourse->long_description = $request->long_description;
            $shortCourse->priority_number = $request->priority_number;
            $shortCourse->status = $request->status;
            $shortCourse->save();

            toastr()->success('Created Successfully');
            return redirect()->route('admin.short-course.index');
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
        $shortCourse = ShortCourse::findOrFail($id);
        return view('admin.short-course.edit', compact('shortCourse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' =>['nullable', 'image', 'max:2000'],
            'name' => ['required', 'max:255', 'unique:diploma_engineering_courses,name,'.$id],
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
            $img->toPng()->save(base_path('public/uploads/short_course_image/'.$name_gen));
            $save_url = 'uploads/short_course_image/'.$name_gen;

            $shortCourse = ShortCourse::findOrFail($id);
            $shortCourse->image = $save_url;
            $shortCourse->name = $request->name;
            $shortCourse->slug = Str::slug($request->name);
            $shortCourse->month = $request->month;
            $shortCourse->duration = $request->duration;
            $shortCourse->course_fee = $request->course_fee;
            $shortCourse->short_description = $request->short_description;
            $shortCourse->long_description = $request->long_description;
            $shortCourse->priority_number = $request->priority_number;
            $shortCourse->status = $request->status;
            $shortCourse->save();

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.short-course.index');
        }else{
            $shortCourse = ShortCourse::findOrFail($id);
            $shortCourse->name = $request->name;
            $shortCourse->slug = Str::slug($request->name);
            $shortCourse->month = $request->month;
            $shortCourse->duration = $request->duration;
            $shortCourse->course_fee = $request->course_fee;
            $shortCourse->short_description = $request->short_description;
            $shortCourse->long_description = $request->long_description;
            $shortCourse->priority_number = $request->priority_number;
            $shortCourse->status = $request->status;
            $shortCourse->save();

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.short-course.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shortCourse = ShortCourse::findOrFail($id);
        unlink($shortCourse->image);
        $shortCourse->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
