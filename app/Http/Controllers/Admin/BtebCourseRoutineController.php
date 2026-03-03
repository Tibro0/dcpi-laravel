<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BtebCourseRoutineDataTable;
use App\Http\Controllers\Controller;
use App\Models\BtebCourseRoutine;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class BtebCourseRoutineController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(BtebCourseRoutineDataTable $dataTable)
    {
        return $dataTable->render('admin.bteb-course-routine.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bteb-course-routine.create');
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

        $btebCourseRoutine = new BtebCourseRoutine();

        /** Handle file upload */
        $imagePath = $this->uploadImage($request, 'image', 'uploads/bteb_course_routine');

        $btebCourseRoutine->image = $imagePath;
        $btebCourseRoutine->course_name = $request->course_name;
        $btebCourseRoutine->course_duration = $request->course_duration;
        $btebCourseRoutine->priority_number = $request->priority_number;
        $btebCourseRoutine->status = $request->status;
        $btebCourseRoutine->save();

        toastr()->success('Created Successfully!');
        return redirect()->route('admin.bteb-course-routine.index');
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
        $btebCourseRoutine = BtebCourseRoutine::findOrFail($id);
        return view('admin.bteb-course-routine.edit', compact('btebCourseRoutine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'mimes:png,pdf'],
            'course_name' => ['required', 'max:255'],
            'course_duration' => ['required', 'max:255'],
            'priority_number' => ['required', 'integer'],
            'status' => ['required', 'boolean'],
        ]);

        $btebCourseRoutine = BtebCourseRoutine::findOrFail($id);

        $defaultImages = [
            'frontend/images/courses/course-1.jpg',
            'frontend/images/courses/course-2.jpg',
            'frontend/images/courses/course-3.jpg',
            'frontend/images/courses/course-4.jpg',
            'frontend/images/courses/course-5.jpg',
            'frontend/images/courses/course-6.jpg',
        ];


        if ($request->hasFile('image')) {
            $isDefaultImage = in_array($btebCourseRoutine->image, $defaultImages);

            if (!$isDefaultImage) {
                $imagePath = $this->updateImage($request, 'image', 'uploads/bteb_course_routine', $btebCourseRoutine->image);
            } else {
                $imagePath = $this->uploadImage($request, 'image', 'uploads/bteb_course_routine');
            }

            $btebCourseRoutine->image = $imagePath;
        }

        $btebCourseRoutine->course_name = $request->course_name;
        $btebCourseRoutine->course_duration = $request->course_duration;
        $btebCourseRoutine->priority_number = $request->priority_number;
        $btebCourseRoutine->status = $request->status;
        $btebCourseRoutine->save();

        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.bteb-course-routine.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $btebCourseRoutine = BtebCourseRoutine::findOrFail($id);

        $defaultImages = [
            'frontend/images/courses/course-1.jpg',
            'frontend/images/courses/course-2.jpg',
            'frontend/images/courses/course-3.jpg',
            'frontend/images/courses/course-4.jpg',
            'frontend/images/courses/course-5.jpg',
            'frontend/images/courses/course-6.jpg',
        ];

        if ($btebCourseRoutine->image && !in_array($btebCourseRoutine->image, $defaultImages)) {
            $this->deleteImage($btebCourseRoutine->image);
        }

        $btebCourseRoutine->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
