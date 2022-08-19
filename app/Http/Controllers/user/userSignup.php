<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission_to_user;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;


class userSignup extends Controller
{

    public function register(Request $req)
    {

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        $image = $req->file('image');
        $name_gen = time() . rand(1, 999999);
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $location = 'images/user/';
        $last_img = $img_name;
        $image->move($location, $img_name);

        User::insert([


            'name' => $req->name,
            'email' => $req->email,
            'image' => $last_img,
            'phone_no' => $req->phone_no,
            'password' => Hash::make($req->password),
            'is_admin' => 0
        ]);
        return redirect('user_login')->with('success', 'Registered successfully');
    }

    public function userlogin(Request $req)
    {

        $req->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

        $users = User::where('email', '=', $req->email)
            ->where('is_admin', '=', 0)
            ->first();
        if ($users) {

            if (Hash::check($req->password, $users->password)) {
                Session::put('loginid', $users->id);
                return redirect('user-dashboard')->with('username', $users);
            } else {
                return back()->with('fail', 'Password does not match');
            }
        } else {
            return back()->with('fail', 'Email does not exists');
        }
    }
    public function userdashboard()
    {
        $user = Session::get('loginid');
        $name = User::where('id', $user)->first();
        return view('user.user_dashboard')->with('username', $name);
    }

    public function logout()
    {
        if (Session::has('loginid')) {
            Session::pull('loginid');

            return redirect('user_login');
        }
    }

    public function viewuser()
    {
        $user = User::all();
        return view('admin.view_user')->with('userlist', $user);
    }

    function deleteuser($id)
    {

        $data = User::find($id);
        $data->delete();
        return redirect('user-lists');
    }


    public function userlist()
    {
        $user = User::all();
        $data = Role::all();
        return view('admin.assign_roles')->with('list', $user)->with('value', $data);
    }



    public function usersview($id)
    {
        $data = User::find($id);
        return view('admin.edit_user', ['data' => $data]);
    }



    function updateuser(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required',
            'phone_no' => 'required',
        ]);

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $name_gen = time() . rand(1, 999999);
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $location = 'images/user/';
            $last_img = $img_name;
            $image->move($location, $img_name);

            User::where('id', $req->id)->update([
                'image' => $last_img,

            ]);
        }

        $user = User::find($req->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone_no = $req->phone_no;
        $result = $user->save();
        if ($result) {
            return redirect('user-lists')->with('success', 'Updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function updaterole(Request $req)
    {
        // $req->validate([
        //     'role' => 'required',
        //     'user' => 'required',
        // ]);
        // dd($req->all());

        $userid = $req->users;
        $user = User::find($req->id)
            ->where('id', $userid);

        $user->user_type = $req->roles;
        $result = $user->save();
        if ($result) {
            return redirect('user-lists')->with('success', 'Updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    //     $user = new User;
    //     $user->name=$req->name;
    //     $user->email=$req->email;
    //     $user->image=$req->file('image')->store('public/image');
    //     $user->phone_no=$req->phone_no;
    //     $user->password=Hash::make($req->password);
    //     $user->is_admin=0;
    //     $result=$user->save();

    //     if($result){
    //         return redirect('user_login')->with('success','Registered successfully');
    //     }else{
    //         return back()->with('fail','Something went wrong');
    //     }
    // }
}