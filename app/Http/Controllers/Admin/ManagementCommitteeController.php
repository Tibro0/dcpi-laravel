<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ManagementCommitteeDataTable;
use App\Http\Controllers\Controller;
use App\Models\ManagementCommittee;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

class ManagementCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ManagementCommitteeDataTable $dataTable)
    {
        return $dataTable->render('admin.management-committee.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.management-committee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:3000'],
            'name' => ['required', 'max:255', 'unique:management_committees,name'],
            'designation' => ['required', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'whatsapp' => ['nullable', 'max:255'],
            'facebook_id_name' => ['nullable', 'max:255'],
            'facebook_url' => ['nullable', 'url', 'max:255'],
            'linkedin_id_name' => ['nullable', 'max:255'],
            'linkedin_url' => ['nullable', 'url', 'max:255'],
            'twitter_id_name' => ['nullable', 'max:255'],
            'twitter_url' => ['nullable', 'url', 'max:255'],
            'website_url' => ['nullable', 'url', 'max:255'],
            'address' => ['nullable', 'max:255'],
            'address_url' => ['nullable', 'max:255'],
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
            $img = $img->resize(445,501);
            $img->toPng()->save(base_path('public/uploads/management_committee_image/'.$name_gen));
            $save_url = 'uploads/management_committee_image/'.$name_gen;

            $managementCommittee = new ManagementCommittee();
            $managementCommittee->image = $save_url;
            $managementCommittee->name = $request->name;
            $managementCommittee->slug = Str::slug($request->name);
            $managementCommittee->designation = $request->designation;
            $managementCommittee->email = $request->email;
            $managementCommittee->whatsapp = $request->whatsapp;
            $managementCommittee->facebook_id_name = $request->facebook_id_name;
            $managementCommittee->facebook_url = $request->facebook_url;
            $managementCommittee->linkedin_id_name = $request->linkedin_id_name;
            $managementCommittee->linkedin_url = $request->linkedin_url;
            $managementCommittee->twitter_id_name = $request->twitter_id_name;
            $managementCommittee->twitter_url = $request->twitter_url;
            $managementCommittee->website_url = $request->website_url;
            $managementCommittee->address = $request->address;
            $managementCommittee->address_url = $request->address_url;
            $managementCommittee->short_description = $request->short_description;
            $managementCommittee->long_description = $request->long_description;
            $managementCommittee->priority_number = $request->priority_number;
            $managementCommittee->status = $request->status;
            $managementCommittee->save();

            toastr()->success('Created Successfully');
            return redirect()->route('admin.management-committee.index');
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
        $managementCommittee = ManagementCommittee::findOrFail($id);
        return view('admin.management-committee.edit', compact('managementCommittee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:3000'],
            'name' => ['required', 'max:255', 'unique:management_committees,name,'.$id],
            'designation' => ['required', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'whatsapp' => ['nullable', 'max:255'],
            'facebook_id_name' => ['nullable', 'max:255'],
            'facebook_url' => ['nullable', 'url', 'max:255'],
            'linkedin_id_name' => ['nullable', 'max:255'],
            'linkedin_url' => ['nullable', 'url', 'max:255'],
            'twitter_id_name' => ['nullable', 'max:255'],
            'twitter_url' => ['nullable', 'url', 'max:255'],
            'website_url' => ['nullable', 'url', 'max:255'],
            'address' => ['nullable', 'max:255'],
            'address_url' => ['nullable', 'max:255'],
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
            $img = $img->resize(445,501);
            $img->toPng()->save(base_path('public/uploads/management_committee_image/'.$name_gen));
            $save_url = 'uploads/management_committee_image/'.$name_gen;

            $managementCommittee = ManagementCommittee::findOrFail($id);
            $managementCommittee->image = $save_url;
            $managementCommittee->name = $request->name;
            $managementCommittee->slug = Str::slug($request->name);
            $managementCommittee->designation = $request->designation;
            $managementCommittee->email = $request->email;
            $managementCommittee->whatsapp = $request->whatsapp;
            $managementCommittee->facebook_id_name = $request->facebook_id_name;
            $managementCommittee->facebook_url = $request->facebook_url;
            $managementCommittee->linkedin_id_name = $request->linkedin_id_name;
            $managementCommittee->linkedin_url = $request->linkedin_url;
            $managementCommittee->twitter_id_name = $request->twitter_id_name;
            $managementCommittee->twitter_url = $request->twitter_url;
            $managementCommittee->website_url = $request->website_url;
            $managementCommittee->address = $request->address;
            $managementCommittee->address_url = $request->address_url;
            $managementCommittee->short_description = $request->short_description;
            $managementCommittee->long_description = $request->long_description;
            $managementCommittee->priority_number = $request->priority_number;
            $managementCommittee->status = $request->status;
            $managementCommittee->save();

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Created Successfully');
            return redirect()->route('admin.management-committee.index');
        }else{
            $managementCommittee = ManagementCommittee::findOrFail($id);
            $managementCommittee->name = $request->name;
            $managementCommittee->slug = Str::slug($request->name);
            $managementCommittee->designation = $request->designation;
            $managementCommittee->email = $request->email;
            $managementCommittee->whatsapp = $request->whatsapp;
            $managementCommittee->facebook_id_name = $request->facebook_id_name;
            $managementCommittee->facebook_url = $request->facebook_url;
            $managementCommittee->linkedin_id_name = $request->linkedin_id_name;
            $managementCommittee->linkedin_url = $request->linkedin_url;
            $managementCommittee->twitter_id_name = $request->twitter_id_name;
            $managementCommittee->twitter_url = $request->twitter_url;
            $managementCommittee->website_url = $request->website_url;
            $managementCommittee->address = $request->address;
            $managementCommittee->address_url = $request->address_url;
            $managementCommittee->short_description = $request->short_description;
            $managementCommittee->long_description = $request->long_description;
            $managementCommittee->priority_number = $request->priority_number;
            $managementCommittee->status = $request->status;
            $managementCommittee->save();

            toastr()->success('Created Successfully');
            return redirect()->route('admin.management-committee.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $managementCommittee = ManagementCommittee::findOrFail($id);
        unlink($managementCommittee->image);
        $managementCommittee->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
