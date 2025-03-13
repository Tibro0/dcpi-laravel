<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\NoticeDataTable;
use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(NoticeDataTable $dataTable)
    {
        return $dataTable->render('admin.notice.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:3000'],
            'title' => ['required', 'max:255', 'unique:notices,title'],
            'date' => ['required', 'date', 'max:255'],
            'description' => ['required', 'max:255'],
            'priority_number' => ['required', 'integer'],
            'status' => ['required', 'boolean'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(2480,3508);
            $img->toPng()->save(base_path('public/uploads/notice_image/'.$name_gen));
            $save_url = 'uploads/notice_image/'.$name_gen;

            $notice = new Notice();
            $notice->image = $save_url;
            $notice->title = $request->title;
            $notice->slug = Str::slug($request->title);
            $notice->date = $request->date;
            $notice->description = $request->description;
            $notice->priority_number = $request->priority_number;
            $notice->status = $request->status;
            $notice->save();

            toastr()->success('Created Successfully!');
            return redirect()->route('admin.notice.index');
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
        $notice = Notice::findOrFail($id);
        return view('admin.notice.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:3000'],
            'title' => ['required', 'max:255', 'unique:notices,title,'.$id],
            'date' => ['required', 'date', 'max:255'],
            'description' => ['required', 'max:255'],
            'priority_number' => ['required', 'integer'],
            'status' => ['required', 'boolean'],
        ]);

        $oldImage = $request->old_image;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(2480,3508);
            $img->toPng()->save(base_path('public/uploads/notice_image/'.$name_gen));
            $save_url = 'uploads/notice_image/'.$name_gen;

            $notice = Notice::findOrFail($id);
            $notice->image = $save_url;
            $notice->title = $request->title;
            $notice->slug = Str::slug($request->title);
            $notice->date = $request->date;
            $notice->description = $request->description;
            $notice->priority_number = $request->priority_number;
            $notice->status = $request->status;
            $notice->save();

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Updated Successfully!');
            return redirect()->route('admin.notice.index');
        }else{
            $notice = Notice::findOrFail($id);
            $notice->title = $request->title;
            $notice->slug = Str::slug($request->title);
            $notice->date = $request->date;
            $notice->description = $request->description;
            $notice->priority_number = $request->priority_number;
            $notice->status = $request->status;
            $notice->save();

            toastr()->success('Updated Successfully!');
            return redirect()->route('admin.notice.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice = Notice::findOrFail($id);
        unlink($notice->image);
        $notice->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
