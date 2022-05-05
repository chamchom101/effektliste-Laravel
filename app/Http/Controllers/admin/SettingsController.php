<?php

namespace App\Http\Controllers\admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index() {

        //$setting = Setting::where('id', '=', 1)->get();
        //$settingTitel = Setting::find(1); VIEW::Share
        //$settingLogo = Setting::find(2);

        return view('admin.settings');
    }

    public function update () {

    


    }
}
