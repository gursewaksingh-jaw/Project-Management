<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Session;

class postController extends Controller
{
       public function addpost(Request $req)
       {

              $req->validate([

                     'title' => 'required',
                     'post_description' => 'required',
              ]);

              $image = $req->file('image');
              $name_gen = time() . rand(1, 999999);
              $img_ext = strtolower($image->getClientOriginalExtension());
              $img_name = $name_gen . '.' . $img_ext;
              $location = 'images/post/';
              $last_img = $img_name;
              $image->move($location, $img_name);
              $user = Session::get('loginid');
              // dd(Session::get('loginid'));

              $data = new Post;
              $data->image = $last_img;
              $data->title = $req->title;
              $data->post_description = $req->post_description;
              $data->user_id = $user;
              $data->save();

              return redirect()->back()->with('success', 'successfully added');
       }


       public function show_post()
       {
              $post = Post::all();
              $user = User::all();
              foreach ($post as $key => $var) {
                     $post[$key]['user'] = User::where('id', $var['user_id'])->first();
              }
              // $username=User::where('id','=','$user')->select(['name', 'email','image'])->first();
              return view('user.all_post')->with('newpost', $post)->with('name', $user);
       }

       function deletepost($id)
       {

              $data = Post::find($id);
              $data->delete();
              return redirect('all-post');
       }

       function viewpost($id)
       {

              $data = Post::find($id);

              return view('user.edit_post', ['data' => $data]);
       }


       function updateimage(Request $req)
       {
              $req->validate([
                     'title' => 'required',
                     'post_description' => 'required',
                     'image' => 'required'
              ]);

              if ($req->hasFile('image')) {
                     $image = $req->file('image');
                     $name_gen = time() . rand(1, 999999);
                     $img_ext = strtolower($image->getClientOriginalExtension());
                     $img_name = $name_gen . '.' . $img_ext;
                     $location = 'images/post/';
                     $last_img = $img_name;
                     $image->move($location, $img_name);

                     $user = Session::get('loginid');
                     Post::where('id', $req->id)
                            ->where('user_id', $user)
                            ->update([
                                   'image' => $last_img,

                            ]);
              }

              $post = Post::find($req->id)->where('user_id', $user);
              $post->title = $req->title;
              $post->post_description = $req->post_description;
              $result = $post->save();
              if ($result) {
                     return redirect('all-postall-post')->with('success', 'Updated successfully');
              } else {
                     return back()->with('fail', 'Something went wrong');
              }
       }
}