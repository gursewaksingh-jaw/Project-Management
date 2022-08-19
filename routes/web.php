<?php

use App\Http\Controllers\admin\addcontentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\menuController;
use App\Http\Controllers\admin\pageController;
use App\Http\Controllers\admin\adminSignup;
use App\http\Controllers\admin\postController;
use App\Http\Controllers\admin\contactController;
use App\Http\Controllers\admin\ckeditorController;
use App\Http\Controllers\admin\rolesandpermission;
use App\Http\Controllers\user\userSignup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin-dashboard', function () {
    return view('admin.admin_dashboard');
})->middleware('adminlogged');

Route::get('admin_register', function () {
    return view('admin.register');
});
Route::get('admin_login', function () {
    return view('admin.login');
});


Route::get('jquery-sort', function () {
    return view('admin.jquerysort');
});
// ------------------menu-view-----------------------------

Route::get('add-menu', function () {
    return view('admin.create_menu');
})->middleware('adminlogged');

Route::get('menu-list', function () {
    return view('admin.menu_list');
})->middleware('adminlogged');

Route::get('update-menu', function () {
    return view('admin.edit_menu');
})->middleware('adminlogged');

// Route::get('create-faq', function () {
//     return view('admin.add_faq');
// })->middleware('adminlogged');

// ------------------faq-view-----------------------------

Route::get('add-faq', function () {
    return view('admin.add_faq');
})->middleware('adminlogged');

// Route::get('faq-list', function () {
//     return view('admin.faq_list');
// })->middleware('adminlogged');

// ------------------slider-view-----------------------------

Route::get('add-slider', function () {
    return view('admin.add_slider');
})->middleware('adminlogged');

// Route::get('slider-list', function () {
//     return view('admin.slider_list');
// })->middleware('adminlogged');



// ------------------page-view-----------------------------

Route::get('add-pages', function () {
    return view('admin.add_page');
})->middleware('adminlogged');

Route::get('edit-pages', function () {
    return view('admin.edit_page');
})->middleware('adminlogged');


// -----------------User view files-------------------------

Route::get('user-dashboard', function () {
    return view('user.user_dashboard');
})->middleware('isloggedin');

Route::get('User-posts', function () {
    return view('user.all_post');
})->middleware('isloggedin');

Route::get('add-post', function () {
    return view('user.add_post');
})->middleware('isloggedin');

Route::get('user_register', function () {
    return view('user.register');
});
Route::get('user_login', function () {
    return view('user.login');
});

Route::get('user-lists', function () {
    return view('admin.view_user');
});

// Route::get('edit-user', function () {
//     return view('admin.edit_user');
// })->middleware('adminlogged');

Route::get('assign-roles', function () {
    return view('admin.assign_roles');
});

Route::get('add-roles', function () {
    return view('admin.create_roles');
});

Route::get('add-permissions', function () {
    return view('admin.create_permissions');
});


// Route::get('user/logout', function(){
//     Auth::logout();
//     return Redirect::to('user_login');
//  });

// -----------------------------------Main site pages--------------------------------

Route::get('Home', function () {
    return view('home');
});

Route::get('Contact-us', function () {
    return view('contact');
});

Route::get('FAQ-page', function () {
    return view('faq');
});

Route::get('Posts', function () {
    return view('posts');
});

// -----------------------------------------------------------------------------------------

// Route::get('side-bar', function () {
//     return view('Layouts.left_sidebar');
// });


Route::post("created", [menuController::class, 'addmenu']);

Route::get("add-menu", [menuController::class, 'menu'])->middleware('adminlogged');

// Route::post("subcreated", [menuController::class, 'addsub']);


//--------------------------------menu crud--------------------------------------------

Route::get("menu-list", [menuController::class, 'menulist'])->middleware('adminlogged');

Route::get("menu/delete/{id}", [menuController::class, 'deletemenu'])->middleware('adminlogged');

Route::get("menusub/delete/{id}", [menuController::class, 'deletesubmenu'])->middleware('adminlogged');

Route::get("menu/edit/{id}", [menuController::class, 'viewmenu'])->middleware('adminlogged');

Route::post("updated", [menuController::class, 'updatemenu'])->middleware('adminlogged');



// -----------------------------Admin Signup-------------------------------------------

Route::post("logged-in", [adminSignup::class, 'adminlogin']);

Route::get("admin/logout", [adminSignup::class, 'logout']);

// ------------------------User Signup and Login --------------------------------------

Route::post("registered", [userSignup::class, 'register']);

Route::post("logged-in-user", [userSignup::class, 'userlogin']);

Route::get("user/logout", [userSignup::class, 'logout']);

Route::get("user-dashboard", [userSignup::class, 'userdashboard'])->middleware('isloggedin');

// -----------------------------Slider Image crud----------------------------------------------

Route::post("added", [addcontentController::class, 'addimage'])->middleware('adminlogged');

Route::get("slider-list", [addcontentController::class, 'show_img'])->middleware('adminlogged');

Route::get("Home", [addcontentController::class, 'show_slider']);

Route::get("slider/delete/{id}", [addcontentController::class, 'deleteimage']);

Route::get("slider/edit/{id}", [addcontentController::class, 'viewimage']);

Route::post("updatedimg", [addcontentController::class, 'updateimage']);

Route::post("order", [addcontentController::class, 'updateorder']);


// -------------------------------Faq crud---------------------------------------------


Route::post("faq-created", [addcontentController::class, 'addfaq'])->middleware('adminlogged');

Route::get("faq-list", [addcontentController::class, 'show_faq'])->middleware('adminlogged');

Route::get("faq/delete/{id}", [addcontentController::class, 'deletefaq']);

Route::get("faq/edit/{id}", [addcontentController::class, 'viewfaq']);

Route::post("updatedfaq", [addcontentController::class, 'updatefaq'])->middleware('adminlogged');

Route::get("FAQ-page", [addcontentController::class, 'display_faq'])->middleware('adminlogged');

// Route::get("Home",[addcontentController::class,'display_nav']);


// ---------------------------------Contact us------------------------------------------------

Route::post("sent", [contactController::class, 'sendmail']);

// --------------------------------page crud--------------------------------------------------

Route::post("page-created", [pageController::class, 'addpage'])->middleware('adminlogged');

Route::get("page-list", [pageController::class, 'show_page'])->middleware('adminlogged');

Route::get("page/delete/{id}", [pageController::class, 'deletepage']);

Route::get("page/edit/{id}", [pageController::class, 'viewpage']);

Route::post("updated-page", [pageController::class, 'updatepage'])->middleware('adminlogged');

// ----------------------------------page content------------------------------------------------

Route::get("Contact-us", [pageController::class, 'displaycontent']);

// Route::get("Home",[pageController::class,'displaycontenthome']);

// Route::get("FAQ-page",[pageController::class,'displayfaq']);

// --------------------------------------------------------------------------------------------------

// Route::get('add-pages', [ckeditorController::class, 'editoraddpage'])->middleware('adminlogged');

// ------------------------------------Post---------------------------------------------------------

Route::post("posted", [postController::class, 'addpost']);

Route::get("all-post", [postController::class, 'show_post']);


// --------------------------------user list crud--------------------------------------------------

Route::get("user-lists", [userSignup::class, 'viewuser'])->middleware('adminlogged');

Route::get("user/delete/{id}", [userSignup::class, 'deleteuser']);

Route::get("assign-roles", [userSignup::class, 'userlist']);

Route::get("user/edit/{id}", [userSignup::class, 'usersview']);

Route::post("updateduser", [userSignup::class, 'updateuser']);

Route::post("assigned", [userSignup::class, 'updaterole']);


// ------------------------------------Roles and Permission--------------------------------------------

Route::post("createdroles", [rolesandpermission::class, 'addrole']);

Route::post("createdpermission", [rolesandpermission::class, 'addpermission']);

Route::get("add-roles", [rolesandpermission::class, 'show_role']);


Route::post("assignedpermissions", [rolesandpermission::class, 'assign_permission']);

// ----------------------------------------------------------------------------------------------------