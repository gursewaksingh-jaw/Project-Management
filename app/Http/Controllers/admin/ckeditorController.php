<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ckeditorController extends Controller
{
    public function editoraddpage()
    {
        return view('admin.add_page');
    }
    public function editoreditpage()
    {
        return view('admin.edit_page');
    }
}