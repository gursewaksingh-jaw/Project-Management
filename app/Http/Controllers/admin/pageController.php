<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class pageController extends Controller
{
    public function addpage(Request $req)
    {
        $req->validate([

            'title' => 'required',
            'page_description' => 'required',
            // 'sub_description'=>'required',
            'image' => 'required',
            'url' => 'required',
        ]);
        $image = $req->file('image');
        $name_gen = time() . rand(1, 999999);
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $location = 'images/page/';
        $last_img = $img_name;
        $image->move($location, $img_name);

        $data = new Page;
        $data->image = $last_img;
        $data->title = $req->title;
        $data->page_description = $req->page_description;
        $data->sub_description = $req->sub_description;
        $data->url = $req->url;
        $data->save();

        return redirect()->back()->with('success', 'successfully added');
    }

    public function show_page()
    {
        $page = Page::paginate(4);
        return view('admin.page_list')->with('newpages', $page);
    }


    function deletepage($id)
    {

        $data = Page::find($id);
        $data->delete();
        return redirect('page-list');
    }

    function viewpage($id)
    {

        $data = Page::find($id);

        return view('admin.edit_page', ['data' => $data]);
    }



    public function updatepage(Request $req)
    {

        $req->validate([

            'title' => 'required',
            'page_description' => 'required',
            'image' => 'required',
        ]);

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $name_gen = time() . rand(1, 999999);
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $location = 'images/page/';
            $last_img = $img_name;
            $image->move($location, $img_name);

            Page::where('id', $req->id)->update([
                'image' => $last_img,

            ]);
        }

        $data = Page::find($req->id);
        $data->title = $req->title;
        $data->page_description = $req->page_description;
        $data->sub_description = $req->sub_description;
        $data->url = $req->url;
        $data->show = $req->show;
        $result = $data->save();
        if ($result) {
            return redirect('page-list')->with('success', 'Updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
    public function displaycontent()
    {
        $page = Page::where('title', '=', 'Contact us')->first(['title', 'page_description', 'sub_description', 'image', 'url']);
        $nav = Page::where('show', '=', '1')->get(['title', 'page_description', 'sub_description', 'image', 'url']);
        return view('contact')->with('content', $page)->with('nav', $nav);
    }
}