<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ResearchDataTable;
use App\Http\Controllers\Controller;
use App\Models\Research;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ResearchDataTable $dataTable)
    {
        return $dataTable->render('admin.research.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.research.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:3000'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'priority_number' => ['required', 'integer'],
            'status' => ['required', 'boolean'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(350, 319);
            $img->toPng()->save(base_path('public/uploads/research_image/' . $name_gen));
            $save_url = 'uploads/research_image/' . $name_gen;

            $research = new Research();
            $research->image = $save_url;
            $research->title = $request->title;
            $research->description = $request->description;
            $research->priority_number = $request->priority_number;
            $research->status = $request->status;
            $research->save();

            toastr()->success('Created Successfully');
            return redirect()->route('admin.research.index');
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
        $research = Research::findOrFail($id);
        return view('admin.research.edit', compact('research'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:3000'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'priority_number' => ['required', 'integer'],
            'status' => ['required', 'boolean'],
        ]);

        $oldImage = $request->old_image;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(350, 319);
            $img->toPng()->save(base_path('public/uploads/research_image/' . $name_gen));
            $save_url = 'uploads/research_image/' . $name_gen;

            $research = Research::findOrFail($id);
            $research->image = $save_url;
            $research->title = $request->title;
            $research->description = $request->description;
            $research->priority_number = $request->priority_number;
            $research->status = $request->status;
            $research->save();

            $defaultImages = [
                'frontend/images/research/research-1.jpg',
                'frontend/images/research/research-2.jpg',
                'frontend/images/research/research-3.jpg',
                'frontend/images/research/research-4.jpg',
                'frontend/images/research/research-5.jpg',
                'frontend/images/research/research-6.jpg',
            ];

            if ($oldImage && !in_array($oldImage, $defaultImages) && file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.research.index');
        } else {
            $research = Research::findOrFail($id);
            $research->title = $request->title;
            $research->description = $request->description;
            $research->priority_number = $request->priority_number;
            $research->status = $request->status;
            $research->save();

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.research.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $research = Research::findOrFail($id);

        $defaultImages = [
            'frontend/images/research/research-1.jpg',
            'frontend/images/research/research-2.jpg',
            'frontend/images/research/research-3.jpg',
            'frontend/images/research/research-4.jpg',
            'frontend/images/research/research-5.jpg',
            'frontend/images/research/research-6.jpg',
        ];

        if ($research->image && !in_array($research->image, $defaultImages) && file_exists($research->image)) {
            unlink($research->image);
        }

        $research->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
