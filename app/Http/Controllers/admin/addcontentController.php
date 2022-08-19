<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\faq;
use App\Models\Page;


class addcontentController extends Controller
{

    public function addimage(Request $req)
    {
        $req->validate([
            'image' => 'required',
            'image_title' => 'required', //here user is the table name
            'description' => 'required'
        ]);
        $image = $req->file('image');
        $name_gen = time() . rand(1, 999999);
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $location = 'images/slider/';
        $last_img = $img_name;
        $image->move($location, $img_name);

        slider::insert([

            'image' => $last_img,
            'image_title' => $req->image_title,
            'description' => $req->description
        ]);
        return redirect()->back()->with('success', 'successfully added');
    }


    public function show_img()
    {
        $image = slider::all();
        return view('admin.slider_list')->with('sliderimg', $image);
    }


    function deleteimage($id)
    {

        $data = Slider::find($id);
        $data->delete();
        return redirect('slider-list');
    }

    function viewimage($id)
    {

        $data = Slider::find($id);
        $alldata = slider::all();
        return view('admin.edit_slider')->with('data', $data)->with('datalist', $alldata);
    }


    function updateimage(Request $req)
    {
        $req->validate([
            'image_title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $name_gen = time() . rand(1, 999999);
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $location = 'images/slider/';
            $last_img = $img_name;
            $image->move($location, $img_name);

            Slider::where('id', $req->id)->update([
                'image' => $last_img,

            ]);
        }

        $image = Slider::find($req->id);
        $image->image_title = $req->image_title;
        $image->description = $req->description;
        $result = $image->save();
        if ($result) {
            return redirect('slider-list')->with('success', 'Updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }


    function updateorder(Request $req)
    {
        $idval = $req->sliderid;

        $data = Slider::find('id', $req->id)->update([
            'order' => $idval
        ]);


        if ($data) {
            return redirect('slider-list')->with('success', 'Updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
    public function show_slider()
    {
        $slider = slider::paginate(3);
        $page = Page::where('show', '=', '1')->get(['title', 'page_description', 'sub_description', 'image', 'url']);

        return view('home')->with('slider', $slider)->with('nav', $page);
    }

    // -------------------------------------------FAQ--------------------------------------------------------

    function addfaq(Request $req)
    {
        $req->validate([
            'question' => 'required',
            'answer' => 'required',

        ]);
        $faq = new faq;
        $faq->question = $req->question;
        $faq->answer = $req->answer;
        $result = $faq->save();
        if ($result) {
            return redirect('add-faq')->with('success', 'FAQ added successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    function deletefaq($id)
    {

        $data = faq::find($id);
        $data->delete();
        return redirect('faq-list');
    }

    public function show_faq()
    {
        $data = faq::all();
        return view('admin.faq_list')->with('data', $data);
    }


    function viewfaq($id)
    {

        $data = faq::find($id);

        return view('admin.edit_faq', ['data' => $data]);
    }

    function updatefaq(Request $req)
    {
        $req->validate([
            'question' => 'required',
            'answer' => 'required'

        ]);
        $faq = faq::find($req->id);
        $faq->question = $req->question;
        $faq->answer = $req->answer;
        $result = $faq->save();
        if ($result) {
            return redirect('faq-list')->with('success', ' updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function display_faq()
    {
        $data = faq::all();
        $page = Page::where('title', '=', 'FAQ')->first(['title', 'page_description', 'sub_description', 'image', 'url']);
        $nav = Page::where('show', '=', '1')->get(['title', 'page_description', 'sub_description', 'image', 'url']);
        return view('faq')->with('faq', $data)->with('content', $page)->with('nav', $nav);
    }

    // ----------------------------------------------------------------------------------------------------------------

    // public function display_nav(){

    //     $page =Page::where('show','=','1')->first(['title', 'page_description','sub_description','image','url']);

    //     return view('home')->with('nav',$page);
    //    }

}