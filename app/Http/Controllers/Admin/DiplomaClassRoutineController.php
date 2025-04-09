<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DiplomaInEngineeringClassRoutine;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class DiplomaClassRoutineController extends Controller
{
    use ImageUploadTrait;
    public function civilIndex(){
        $diplomaClassRoutine = DiplomaInEngineeringClassRoutine::first();
        return view('admin.diploma-class-routine.civil-index', compact('diplomaClassRoutine'));
    }

    public function civilUpdate(Request $request){
        $request->validate([
            'civil_1st_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_2nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_3nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_4nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_5nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_6nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'civil_7nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
        ]);
        $ClassRoutineImage = DiplomaInEngineeringClassRoutine::findOrFail(1);

        $civil_1st_semester_routine_image = $this->updateImage($request, 'civil_1st_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->civil_1st_semester_routine_image);

        $civil_2nd_semester_routine_image = $this->updateImage($request, 'civil_2nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->civil_2nd_semester_routine_image);

        $civil_3nd_semester_routine_image = $this->updateImage($request, 'civil_3nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->civil_3nd_semester_routine_image);

        $civil_4nd_semester_routine_image = $this->updateImage($request, 'civil_4nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->civil_4nd_semester_routine_image);

        $civil_5nd_semester_routine_image = $this->updateImage($request, 'civil_5nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->civil_5nd_semester_routine_image);

        $civil_6nd_semester_routine_image = $this->updateImage($request, 'civil_6nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->civil_6nd_semester_routine_image);

        $civil_7nd_semester_routine_image = $this->updateImage($request, 'civil_7nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->civil_7nd_semester_routine_image);

        DiplomaInEngineeringClassRoutine::updateOrCreate(
            ['id' => 1],
            [
                'civil_1st_semester_routine_image' => empty(!$civil_1st_semester_routine_image) ? $civil_1st_semester_routine_image : $ClassRoutineImage->civil_1st_semester_routine_image,

                'civil_2nd_semester_routine_image' => empty(!$civil_2nd_semester_routine_image) ? $civil_2nd_semester_routine_image : $ClassRoutineImage->civil_2nd_semester_routine_image,

                'civil_3nd_semester_routine_image' => empty(!$civil_3nd_semester_routine_image) ? $civil_3nd_semester_routine_image : $ClassRoutineImage->civil_3nd_semester_routine_image,

                'civil_4nd_semester_routine_image' => empty(!$civil_4nd_semester_routine_image) ? $civil_4nd_semester_routine_image : $ClassRoutineImage->civil_4nd_semester_routine_image,

                'civil_5nd_semester_routine_image' => empty(!$civil_5nd_semester_routine_image) ? $civil_5nd_semester_routine_image : $ClassRoutineImage->civil_5nd_semester_routine_image,

                'civil_6nd_semester_routine_image' => empty(!$civil_6nd_semester_routine_image) ? $civil_6nd_semester_routine_image : $ClassRoutineImage->civil_6nd_semester_routine_image,

                'civil_7nd_semester_routine_image' => empty(!$civil_7nd_semester_routine_image) ? $civil_7nd_semester_routine_image : $ClassRoutineImage->civil_7nd_semester_routine_image,
            ]
        );

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }

    public function computerIndex(){
        $diplomaClassRoutine = DiplomaInEngineeringClassRoutine::first();
        return view('admin.diploma-class-routine.computer-index', compact('diplomaClassRoutine'));
    }

    public function computerUpdate(Request $request){
        $request->validate([
            'computer_1st_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_2nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_3nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_4nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_5nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_6nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'computer_7nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
        ]);
        $ClassRoutineImage = DiplomaInEngineeringClassRoutine::findOrFail(1);

        $computer_1st_semester_routine_image = $this->updateImage($request, 'computer_1st_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->computer_1st_semester_routine_image);

        $computer_2nd_semester_routine_image = $this->updateImage($request, 'computer_2nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->computer_2nd_semester_routine_image);

        $computer_3nd_semester_routine_image = $this->updateImage($request, 'computer_3nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->computer_3nd_semester_routine_image);

        $computer_4nd_semester_routine_image = $this->updateImage($request, 'computer_4nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->computer_4nd_semester_routine_image);

        $computer_5nd_semester_routine_image = $this->updateImage($request, 'computer_5nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->computer_5nd_semester_routine_image);

        $computer_6nd_semester_routine_image = $this->updateImage($request, 'computer_6nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->computer_6nd_semester_routine_image);

        $computer_7nd_semester_routine_image = $this->updateImage($request, 'computer_7nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->computer_7nd_semester_routine_image);

        DiplomaInEngineeringClassRoutine::updateOrCreate(
            ['id' => 1],
            [
                'computer_1st_semester_routine_image' => empty(!$computer_1st_semester_routine_image) ? $computer_1st_semester_routine_image : $ClassRoutineImage->computer_1st_semester_routine_image,

                'computer_2nd_semester_routine_image' => empty(!$computer_2nd_semester_routine_image) ? $computer_2nd_semester_routine_image : $ClassRoutineImage->computer_2nd_semester_routine_image,

                'computer_3nd_semester_routine_image' => empty(!$computer_3nd_semester_routine_image) ? $computer_3nd_semester_routine_image : $ClassRoutineImage->computer_3nd_semester_routine_image,

                'computer_4nd_semester_routine_image' => empty(!$computer_4nd_semester_routine_image) ? $computer_4nd_semester_routine_image : $ClassRoutineImage->computer_4nd_semester_routine_image,

                'computer_5nd_semester_routine_image' => empty(!$computer_5nd_semester_routine_image) ? $computer_5nd_semester_routine_image : $ClassRoutineImage->computer_5nd_semester_routine_image,

                'computer_6nd_semester_routine_image' => empty(!$computer_6nd_semester_routine_image) ? $computer_6nd_semester_routine_image : $ClassRoutineImage->computer_6nd_semester_routine_image,

                'computer_7nd_semester_routine_image' => empty(!$computer_7nd_semester_routine_image) ? $computer_7nd_semester_routine_image : $ClassRoutineImage->computer_7nd_semester_routine_image,
            ]
        );

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }

    public function electricalIndex(){
        $diplomaClassRoutine = DiplomaInEngineeringClassRoutine::first();
        return view('admin.diploma-class-routine.electrical-index', compact('diplomaClassRoutine'));
    }

    public function electricalUpdate(Request $request){
        $request->validate([
            'electrical_1st_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_2nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_3nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_4nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_5nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_6nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
            'electrical_7nd_semester_routine_image' => ['nullable', 'mimes:png,pdf', 'max:3000'],
        ]);
        $ClassRoutineImage = DiplomaInEngineeringClassRoutine::findOrFail(1);

        $electrical_1st_semester_routine_image = $this->updateImage($request, 'electrical_1st_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->electrical_1st_semester_routine_image);

        $electrical_2nd_semester_routine_image = $this->updateImage($request, 'electrical_2nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->electrical_2nd_semester_routine_image);

        $electrical_3nd_semester_routine_image = $this->updateImage($request, 'electrical_3nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->electrical_3nd_semester_routine_image);

        $electrical_4nd_semester_routine_image = $this->updateImage($request, 'electrical_4nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->electrical_4nd_semester_routine_image);

        $electrical_5nd_semester_routine_image = $this->updateImage($request, 'electrical_5nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->electrical_5nd_semester_routine_image);

        $electrical_6nd_semester_routine_image = $this->updateImage($request, 'electrical_6nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->electrical_6nd_semester_routine_image);

        $electrical_7nd_semester_routine_image = $this->updateImage($request, 'electrical_7nd_semester_routine_image', 'uploads/diplomaIn_engineering_class_routine', $ClassRoutineImage->electrical_7nd_semester_routine_image);

        DiplomaInEngineeringClassRoutine::updateOrCreate(
            ['id' => 1],
            [
                'electrical_1st_semester_routine_image' => empty(!$electrical_1st_semester_routine_image) ? $electrical_1st_semester_routine_image : $ClassRoutineImage->electrical_1st_semester_routine_image,

                'electrical_2nd_semester_routine_image' => empty(!$electrical_2nd_semester_routine_image) ? $electrical_2nd_semester_routine_image : $ClassRoutineImage->electrical_2nd_semester_routine_image,

                'electrical_3nd_semester_routine_image' => empty(!$electrical_3nd_semester_routine_image) ? $electrical_3nd_semester_routine_image : $ClassRoutineImage->electrical_3nd_semester_routine_image,

                'electrical_4nd_semester_routine_image' => empty(!$electrical_4nd_semester_routine_image) ? $electrical_4nd_semester_routine_image : $ClassRoutineImage->electrical_4nd_semester_routine_image,

                'electrical_5nd_semester_routine_image' => empty(!$electrical_5nd_semester_routine_image) ? $electrical_5nd_semester_routine_image : $ClassRoutineImage->electrical_5nd_semester_routine_image,

                'electrical_6nd_semester_routine_image' => empty(!$electrical_6nd_semester_routine_image) ? $electrical_6nd_semester_routine_image : $ClassRoutineImage->electrical_6nd_semester_routine_image,

                'electrical_7nd_semester_routine_image' => empty(!$electrical_7nd_semester_routine_image) ? $electrical_7nd_semester_routine_image : $ClassRoutineImage->electrical_7nd_semester_routine_image,
            ]
        );

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }
}
