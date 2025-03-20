<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomStaticPage;
use Illuminate\Http\Request;

class CustomStaticPageController extends Controller
{
    public function ourIdentityIndex(){
        $keys = ['our_identity_page_content'];
        $content = CustomStaticPage::whereIn('key', $keys)->pluck('value','key');
        return view('admin.custom-page.our-identity.index', compact('content'));
    }

    public function ourIdentityUpdate(Request $request){
        $validatedData = $request->validate([
            'our_identity_page_content' => ['required'],
        ]);

        foreach ($validatedData as $key => $value) {
            CustomStaticPage::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        toastr()->success('Updated Successfully!');
        return redirect()->back();
    }
}
