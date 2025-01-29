<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Menu;
use App\SocialIcons;
use Illuminate\Http\Request;

class TopBarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function topbar_settings()
    {
        $all_social_icons = SocialIcons::all();
        return view('backend.pages.topbar-settings')->with(['all_social_icons' => $all_social_icons]);
    }

    public function update_topbar_info_items(Request $request)
    {
        $this->validate($request, [
            'navbar_right_text' => 'nullable|string|max:191',
            'navbar_right_info' => 'nullable|string|max:191',
            'navbar_right_faq_url' => 'nullable|string|max:191',
            'navbar_right_faq_text' => 'nullable|string|max:191',
        ]);

        update_static_option('navbar_right_text', $request->navbar_right_text);
        update_static_option('navbar_right_info', $request->navbar_right_info);
        update_static_option('navbar_right_faq_text', $request->navbar_right_faq_text);
        update_static_option('navbar_right_faq_url', $request->navbar_right_faq_url);

        return redirect()->back()->with(['msg' => __('Navbar Settings Updated..'), 'type' => 'success']);
    }

    /** ===================================================================
     *                          SOCIAL ICONS
      =================================================================== */
    public function new_social_item(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required|string',
            'url' => 'required|string',
        ]);

        SocialIcons::create([
            'icon' => $request->sanitize_html('icon'),
            'url' => $request->sanitize_html('url'),
        ]);

        return redirect()->back()->with([
            'msg' => __('New Social Item Added...'),
            'type' => 'success'
        ]);
    }

    public function update_social_item(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required|string',
            'url' => 'required|string',
        ]);

        SocialIcons::find($request->id)->update([
            'icon' => $request->sanitize_html('icon'),
            'url' => $request->sanitize_html('url'),
        ]);

        return redirect()->back()->with([
            'msg' => __('Social Item Updated...'),
            'type' => 'success'
        ]);
    }

    public function delete_social_item(Request $request, $id)
    {
        SocialIcons::find($id)->delete();
        return redirect()->back()->with([
            'msg' => __('Social Item Deleted...'),
            'type' => 'danger'
        ]);
    }
}
