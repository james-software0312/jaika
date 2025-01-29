<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\StaticOption;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $all_pages = Page::all();
        $selected_page_home_page = StaticOption::where("option_name","home_page_identity")->select("option_value as id")->first();
        return view('backend.pages.page.index')->with([
            'all_pages' => $all_pages,
            'home_page' => $selected_page_home_page
        ]);
    }

    public function new_page()
    {
        return view('backend.pages.page.new');
    }

    public function store_new_page(Request $request)
    {
        $this->validate($request, [
            'content' => 'nullable',
            'meta_tags' => 'nullable',
            'meta_description' => 'nullable',
            'title' => 'required',
            'slug' => 'nullable',
            'visibility' => 'nullable',
            'status' => 'required|string|max:191',
            "navbar_variant" => 'required|string|max:191',
            "footer_variant" => 'required|string|max:191',
            "breadcrumb_status" => 'nullable|string|max:191',
            'page_container_option' => 'nullable|string|max:191',
        ]);

        $slug = !empty($request->slug) ? $request->slug : Str::slug($request->title);
        $slug_check = Page::where(['slug' => $slug])->count();
        $slug = $slug_check > 0 ? $slug . '2' : $slug;

        Page::create([
            'slug' => $slug,
            'status' => $request->status,
            'content' => $request->page_content,
            'title' => $request->title,
            'visibility' => $request->visibility,
            'page_builder_status' => (boolean) $request->page_builder_status,
            'meta_tags' => $request->meta_tags,
            'meta_description' => $request->meta_description,
            'navbar_variant' => $request->navbar_variant,
            'footer_variant' => $request->footer_variant,
            'breadcrumb_status' => (int) !! $request->breadcrumb_status,
            'page_container_option' => (int) !! $request->page_container_option,
        ]);

        return redirect()->back()->with([
            'msg' => __('New Page Created...'),
            'type' => 'success'
        ]);
    }

    public function edit_page($id)
    {
        $page_post = Page::find($id);
        return view('backend.pages.page.edit')->with([
            'page_post' => $page_post,
        ]);
    }

    public function update_page(Request $request, $id)
    {
        $this->validate($request, [
            'content' => 'nullable',
            'meta_tags' => 'nullable',
            'meta_description' => 'nullable',
            'title' => 'required',
            'slug' => 'nullable',
            'visibility' => 'nullable',
            'status' => 'required|string|max:191',
            "navbar_variant" => 'required|string|max:191',
            "footer_variant" => 'required|string|max:191',
            "breadcrumb_status" => 'nullable|string|max:191',
            'page_container_option' => 'nullable|string|max:191',
        ]);

        $slug = !empty($request->slug) ? $request->slug : Str::slug($request->title);
        $slug_check = Page::where(['slug' => $slug])->count();
        $slug = $slug_check > 1 ? $slug . '2' : $slug;

        Page::where('id', $id)->update([
            'status' => $request->status,
            'content' => $request->page_content,
            'visibility' => $request->visibility,
            'page_builder_status' => (boolean) $request->page_builder_status,
            'title' => $request->title,
            'slug' => $slug,
            'meta_tags' => $request->meta_tags,
            'meta_description' => $request->meta_description,
            'navbar_variant' => $request->navbar_variant,
            'footer_variant' => $request->footer_variant,
            'breadcrumb_status' => $request->breadcrumb_status ? 1 : 0,
            'page_container_option' => (int) !! $request->page_container_option,
        ]);

        return redirect()->back()->with([
            'msg' => __('Page updated...'),
            'type' => 'success'
        ]);
    }

    public function delete_page(Request $request, $id)
    {
        Page::find($id)->delete();
        return redirect()->back()->with([
            'msg' => __('Page Delete Success...'),
            'type' => 'danger'
        ]);
    }

    public function bulk_action(Request $request)
    {
        $all = Page::whereIn('id', $request->ids)->delete();
        return response()->json(['status' => 'ok']);
    }
}
