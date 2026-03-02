<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogDataTable;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlogDataTable $dataTable)
    {
        return $dataTable->render('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:3000'],
            'title' => ['required', 'max:255', 'unique:blogs,title'],
            'category' => ['required', 'max:255'],
            'date' => ['required', 'max:255'],
            'short_description' => ['required', 'max:255'],
            'long_description' => ['required'],
            'status' => ['required', 'boolean'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(1110, 614);
            $img->toPng()->save(base_path('public/uploads/blog_image/' . $name_gen));
            $save_url = 'uploads/blog_image/' . $name_gen;

            $blog = new Blog();
            $blog->image = $save_url;
            $blog->user_id = Auth::user()->id;
            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title);
            $blog->category = $request->category;
            $blog->date = $request->date;
            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->status = $request->status;
            $blog->save();

            toastr()->success('Created Successfully!');
            return redirect()->route('admin.blog.index');
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
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:3000'],
            'title' => ['required', 'max:255', 'unique:blogs,title,' . $id],
            'category' => ['required', 'max:255'],
            'date' => ['required', 'max:255'],
            'short_description' => ['required', 'max:255'],
            'long_description' => ['required'],
            'status' => ['required', 'boolean'],
        ]);

        $oldImage = $request->old_image;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(1110, 614);
            $img->toPng()->save(base_path('public/uploads/blog_image/' . $name_gen));
            $save_url = 'uploads/blog_image/' . $name_gen;

            $blog = Blog::findOrFail($id);
            $blog->image = $save_url;
            $blog->user_id = Auth::user()->id;
            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title);
            $blog->category = $request->category;
            $blog->date = $request->date;
            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->status = $request->status;
            $blog->save();

            $defaultImages = [
                'frontend/images/blog/post-1.jpg',
                'frontend/images/blog/post-2.jpg',
                'frontend/images/blog/post-3.jpg',
            ];

            if ($oldImage && !in_array($oldImage, $defaultImages) && file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Created Successfully!');
            return redirect()->route('admin.blog.index');
        } else {
            $blog = Blog::findOrFail($id);
            $blog->user_id = Auth::user()->id;
            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title);
            $blog->category = $request->category;
            $blog->date = $request->date;
            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->status = $request->status;
            $blog->save();

            toastr()->success('Created Successfully!');
            return redirect()->route('admin.blog.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);

        $defaultImages = [
            'frontend/images/blog/post-1.jpg',
            'frontend/images/blog/post-2.jpg',
            'frontend/images/blog/post-3.jpg',
        ];

        if ($blog->image && !in_array($blog->image, $defaultImages) && file_exists($blog->image)) {
            unlink($blog->image);
        }

        $blog->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
