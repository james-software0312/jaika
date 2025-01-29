<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMsg;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:admin");
        $this->middleware('permission:slider-list|slider-edit|slider-delete',['only' => ['index']]);
        $this->middleware('permission:slider-edit',['only' => ['edit']]);
        $this->middleware('permission:slider-delete',['only' => ['delete_slider','bulk_action']]);
    }

    public function index(){
        $slider = Slider::paginate();

        return view("backend.slider.index",compact("slider"));
    }

    public function create(){
        return view("backend.slider.new");
    }

    public function store(Request $request){
        $request->validate(["image" => "required"]);

        Slider::create(["image" => $request->image,"title" => $request->title]);

        return redirect(route("admin.slider.index"))->with(['msg' => __('Slider Image Created...'), 'type' => 'success']);
    }

    public function update(Request $request)
    {
        $request->validate([
            'title'=> 'nullable|max:191',
            'image'=> 'required|max:191',
        ]);

        Slider::where('id',$request->id)->update([
            'title'=>$request->title,
            'image'=>$request->image,
        ]);
         return redirect(route("admin.slider.index"))->with(['msg' => __('Slider Image Updated...'), 'type' => 'success']);
        
    }
    public function edit(Request $request, $id=null)
    {
        $slider = Slider::find($id);
        return view('backend.slider.edit',compact('slider'));
    }
    public function delete($id){
        Slider::find($id)->delete();
        return redirect()->back()->with(FlashMsg::item_new(' Slider Deleted Success'));
    }

}