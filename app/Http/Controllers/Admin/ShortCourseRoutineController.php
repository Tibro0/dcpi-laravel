<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ShortCourseRoutineDataTable;
use App\Http\Controllers\Controller;
use App\Models\ShortCourseRoutine;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class ShortCourseRoutineController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(ShortCourseRoutineDataTable $dataTable)
    {
        return $dataTable->render('admin.short-course-routine.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.short-course-routine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'mimes:png,pdf'],
            'course_name' => ['required', 'max:255'],
            'course_duration' => ['required', 'max:255'],
            'priority_number' => ['required', 'integer'],
            'status' => ['required', 'boolean'],
        ]);

        $shortCourseRoutine = new ShortCourseRoutine();

        /** Handle file upload */
        $imagePath = $this->uploadImage($request, 'image', 'uploads/short_course_routine');

        $shortCourseRoutine->image = $imagePath;
        $shortCourseRoutine->course_name = $request->course_name;
        $shortCourseRoutine->course_duration = $request->course_duration;
        $shortCourseRoutine->priority_number = $request->priority_number;
        $shortCourseRoutine->status = $request->status;
        $shortCourseRoutine->save();

        toastr()->success('Created Successfully!');
        return redirect()->route('admin.short-course-routine.index');
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
        $shortCourseRoutine = ShortCourseRoutine::findOrFail($id);
        return view('admin.short-course-routine.edit', compact('shortCourseRoutine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['required', 'mimes:png,pdf'],
            'course_name' => ['required', 'max:255'],
            'course_duration' => ['required', 'max:255'],
            'priority_number' => ['required', 'integer'],
            'status' => ['required', 'boolean'],
        ]);

        $shortCourseRoutine = ShortCourseRoutine::findOrFail($id);

        /** Handle file upload */
        $imagePath = $this->updateImage($request, 'image', 'uploads/short_course_routine', $shortCourseRoutine->image);

        $shortCourseRoutine->image = empty(!$imagePath) ? $imagePath : $shortCourseRoutine->image;
        $shortCourseRoutine->course_name = $request->course_name;
        $shortCourseRoutine->course_duration = $request->course_duration;
        $shortCourseRoutine->priority_number = $request->priority_number;
        $shortCourseRoutine->status = $request->status;
        $shortCourseRoutine->save();

        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.short-course-routine.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shortCourseRoutine = ShortCourseRoutine::findOrFail($id);
        unlink($shortCourseRoutine->image);
        $shortCourseRoutine->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
