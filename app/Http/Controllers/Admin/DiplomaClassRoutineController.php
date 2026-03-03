<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DiplomaInEngineeringClassRoutine;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class DiplomaClassRoutineController extends Controller
{
    use ImageUploadTrait;
    public function civilIndex()
    {
        $diplomaClassRoutine = DiplomaInEngineeringClassRoutine::first();
        return view('admin.diploma-class-routine.civil-index', compact('diplomaClassRoutine'));
    }

    public function civilUpdate(Request $request)
    {
        $request->validate([
            'civil_1st_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_2nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_3nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_4nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_5nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_6nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_7nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
        ]);

        $classRoutine = DiplomaInEngineeringClassRoutine::findOrFail(1);
        $defaultImages = ['frontend/images/events/event-1.jpg'];

        $semesters = [
            '1st',
            '2nd',
            '3nd',
            '4nd',
            '5nd',
            '6nd',
            '7nd'
        ];

        $data = [];

        foreach ($semesters as $semester) {
            $fieldName = "civil_{$semester}_semester_routine_image";

            if ($request->hasFile($fieldName)) {
                $oldImage = $classRoutine->$fieldName;
                $isDefaultImage = in_array($oldImage, $defaultImages);

                if (!$isDefaultImage && $oldImage) {
                    // if real image exit then update new image
                    $data[$fieldName] = $this->updateImage($request, $fieldName, 'uploads/diplomaIn_engineering_class_routine', $oldImage);
                } else {
                    // if default image is null then update new image
                    $data[$fieldName] = $this->uploadImage($request, $fieldName, 'uploads/diplomaIn_engineering_class_routine');
                }
            } else {
                // if user file not uploaded then old value insert
                $data[$fieldName] = $classRoutine->$fieldName;
            }
        }

        DiplomaInEngineeringClassRoutine::updateOrCreate(['id' => 1], $data);

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }

    public function computerIndex()
    {
        $diplomaClassRoutine = DiplomaInEngineeringClassRoutine::first();
        return view('admin.diploma-class-routine.computer-index', compact('diplomaClassRoutine'));
    }

    public function computerUpdate(Request $request)
    {
        $request->validate([
            'computer_1st_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_2nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_3nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_4nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_5nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_6nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_7nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
        ]);

        $classRoutine = DiplomaInEngineeringClassRoutine::findOrFail(1);
        $defaultImages = ['frontend/images/events/event-1.jpg'];

        $semesters = [
            '1st',
            '2nd',
            '3nd',
            '4nd',
            '5nd',
            '6nd',
            '7nd'
        ];

        $data = [];

        foreach ($semesters as $semester) {
            $fieldName = "computer_{$semester}_semester_routine_image";

            if ($request->hasFile($fieldName)) {
                $oldImage = $classRoutine->$fieldName;
                $isDefaultImage = in_array($oldImage, $defaultImages);

                if (!$isDefaultImage && $oldImage) {
                    // if real image exit then update new image
                    $data[$fieldName] = $this->updateImage($request, $fieldName, 'uploads/diplomaIn_engineering_class_routine', $oldImage);
                } else {
                    // if default image is null then update new image
                    $data[$fieldName] = $this->uploadImage($request, $fieldName, 'uploads/diplomaIn_engineering_class_routine');
                }
            } else {
                // if user file not uploaded then old value insert
                $data[$fieldName] = $classRoutine->$fieldName;
            }
        }

        DiplomaInEngineeringClassRoutine::updateOrCreate(['id' => 1], $data);

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }

    public function electricalIndex()
    {
        $diplomaClassRoutine = DiplomaInEngineeringClassRoutine::first();
        return view('admin.diploma-class-routine.electrical-index', compact('diplomaClassRoutine'));
    }

    public function electricalUpdate(Request $request)
    {
        $request->validate([
            'electrical_1st_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_2nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_3nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_4nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_5nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_6nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_7nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
        ]);

        $classRoutine = DiplomaInEngineeringClassRoutine::findOrFail(1);
        $defaultImages = ['frontend/images/events/event-1.jpg'];

        $semesters = [
            '1st',
            '2nd',
            '3nd',
            '4nd',
            '5nd',
            '6nd',
            '7nd'
        ];

        $data = [];

        foreach ($semesters as $semester) {
            $fieldName = "electrical_{$semester}_semester_routine_image";

            if ($request->hasFile($fieldName)) {
                $oldImage = $classRoutine->$fieldName;
                $isDefaultImage = in_array($oldImage, $defaultImages);

                if (!$isDefaultImage && $oldImage) {
                    // if real image exit then update new image
                    $data[$fieldName] = $this->updateImage($request, $fieldName, 'uploads/diplomaIn_engineering_class_routine', $oldImage);
                } else {
                    // if default image is null then update new image
                    $data[$fieldName] = $this->uploadImage($request, $fieldName, 'uploads/diplomaIn_engineering_class_routine');
                }
            } else {
                // if user file not uploaded then old value insert
                $data[$fieldName] = $classRoutine->$fieldName;
            }
        }

        DiplomaInEngineeringClassRoutine::updateOrCreate(['id' => 1], $data);

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }

    public function electronicsIndex()
    {
        $diplomaClassRoutine = DiplomaInEngineeringClassRoutine::first();
        return view('admin.diploma-class-routine.electronics-index', compact('diplomaClassRoutine'));
    }

    public function electronicsUpdate(Request $request)
    {
        $request->validate([
            'electronics_1st_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electronics_2nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electronics_3nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electronics_4nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electronics_5nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electronics_6nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electronics_7nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
        ]);

        $classRoutine = DiplomaInEngineeringClassRoutine::findOrFail(1);
        $defaultImages = ['frontend/images/events/event-1.jpg'];

        $semesters = [
            '1st',
            '2nd',
            '3nd',
            '4nd',
            '5nd',
            '6nd',
            '7nd'
        ];

        $data = [];

        foreach ($semesters as $semester) {
            $fieldName = "electronics_{$semester}_semester_routine_image";

            if ($request->hasFile($fieldName)) {
                $oldImage = $classRoutine->$fieldName;
                $isDefaultImage = in_array($oldImage, $defaultImages);

                if (!$isDefaultImage && $oldImage) {
                    // if real image exit then update new image
                    $data[$fieldName] = $this->updateImage($request, $fieldName, 'uploads/diplomaIn_engineering_class_routine', $oldImage);
                } else {
                    // if default image is null then update new image
                    $data[$fieldName] = $this->uploadImage($request, $fieldName, 'uploads/diplomaIn_engineering_class_routine');
                }
            } else {
                // if user file not uploaded then old value insert
                $data[$fieldName] = $classRoutine->$fieldName;
            }
        }

        DiplomaInEngineeringClassRoutine::updateOrCreate(['id' => 1], $data);

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }

    public function telecommunicationIndex()
    {
        $diplomaClassRoutine = DiplomaInEngineeringClassRoutine::first();
        return view('admin.diploma-class-routine.telecommunication-index', compact('diplomaClassRoutine'));
    }

    public function telecommunicationUpdate(Request $request)
    {
        $request->validate([
            'telecommunication_1st_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'telecommunication_2nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'telecommunication_3nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'telecommunication_4nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'telecommunication_5nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'telecommunication_6nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'telecommunication_7nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
        ]);

        $classRoutine = DiplomaInEngineeringClassRoutine::findOrFail(1);
        $defaultImages = ['frontend/images/events/event-1.jpg'];

        $semesters = [
            '1st',
            '2nd',
            '3nd',
            '4nd',
            '5nd',
            '6nd',
            '7nd'
        ];

        $data = [];

        foreach ($semesters as $semester) {
            $fieldName = "telecommunication_{$semester}_semester_routine_image";

            if ($request->hasFile($fieldName)) {
                $oldImage = $classRoutine->$fieldName;
                $isDefaultImage = in_array($oldImage, $defaultImages);

                if (!$isDefaultImage && $oldImage) {
                    // if real image exit then update new image
                    $data[$fieldName] = $this->updateImage($request, $fieldName, 'uploads/diplomaIn_engineering_class_routine', $oldImage);
                } else {
                    // if default image is null then update new image
                    $data[$fieldName] = $this->uploadImage($request, $fieldName, 'uploads/diplomaIn_engineering_class_routine');
                }
            } else {
                // if user file not uploaded then old value insert
                $data[$fieldName] = $classRoutine->$fieldName;
            }
        }

        DiplomaInEngineeringClassRoutine::updateOrCreate(['id' => 1], $data);

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }
}
