<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AboutUsController extends Controller
{
    public function index(){
        $aboutUs = AboutUs::first();
        return view('admin.about-us.index', compact('aboutUs'));
    }

    public function update(Request $request){
        $request->validate([
            'image' => ['nullable', 'image', 'max:3000'],
            'description' => ['required'],
            'first_counter_name' => ['required', 'max:255'],
            'first_counter_number' => ['required', 'integer'],
            'second_counter_name' => ['required', 'max:255'],
            'second_counter_number' => ['required', 'integer'],
            'third_counter_name' => ['required', 'max:255'],
            'third_counter_number' => ['required', 'integer'],
            'fourth_counter_name' => ['required', 'max:255'],
            'fourth_counter_number' => ['required', 'integer'],
        ]);

        $oldImage = $request->old_image;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(1110,589);
            $img->toPng()->save(base_path('public/uploads/about_us_page_image/'.$name_gen));
            $save_url = 'uploads/about_us_page_image/'.$name_gen;

            AboutUs::UpdateOrCreate(
                ['id' => 1],
                [
                    'image' => $save_url,
                    'description' => $request->description,
                    'first_counter_name' => $request->first_counter_name,
                    'first_counter_number' => $request->first_counter_number,
                    'second_counter_name' => $request->second_counter_name,
                    'second_counter_number' => $request->second_counter_number,
                    'third_counter_name' => $request->third_counter_name,
                    'third_counter_number' => $request->third_counter_number,
                    'fourth_counter_name' => $request->fourth_counter_name,
                    'fourth_counter_number' => $request->fourth_counter_number,
                ]
            );

            $defaultImages = [
                'frontend/images/about/about-page.jpg',
            ];

            if ($oldImage && !in_array($oldImage, $defaultImages) && file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Updated Successfully');
            return redirect()->back();
        }else{
            AboutUs::UpdateOrCreate(
                ['id' => 1],
                [
                    'description' => $request->description,
                    'first_counter_name' => $request->first_counter_name,
                    'first_counter_number' => $request->first_counter_number,
                    'second_counter_name' => $request->second_counter_name,
                    'second_counter_number' => $request->second_counter_number,
                    'third_counter_name' => $request->third_counter_name,
                    'third_counter_number' => $request->third_counter_number,
                    'fourth_counter_name' => $request->fourth_counter_name,
                    'fourth_counter_number' => $request->fourth_counter_number,
                ]
            );

            toastr()->success('Updated Successfully');
            return redirect()->back();
        }
    }
}
