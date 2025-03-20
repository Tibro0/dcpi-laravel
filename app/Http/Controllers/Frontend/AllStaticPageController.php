<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CustomStaticPage;
use Illuminate\Http\Request;

class AllStaticPageController extends Controller
{
    public function ourIdentity(){
        $keys = ['our_identity_page_content'];
        $ourIdentityContent = CustomStaticPage::whereIn('key', $keys)->pluck('value','key');
        return view('frontend.pages.static-page.our-identity', compact('ourIdentityContent'));
    }
}
