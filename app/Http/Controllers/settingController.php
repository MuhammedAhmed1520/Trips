<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Facades\App\Helper\IceHelper;


class settingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Setting $setting)
    {
        $setting = $setting->all();
        return view('admin.setting.index',compact('setting'));
    }

    public function store(Setting $setting,Request $request){

//        dd($request->all());
        foreach (array_except($request->toArray(), ['_token', 'submit']) as $key => $req){
//            dd($key);
            $settingupdate =$setting->where('slug', $key)->get()->first();
//            dd($settingupdate);
//            dd($setting->where('namesetting', $key)->get()->first()->type);
            if ($settingupdate->type != 2){
                $settingupdate->fill(['value' => $req])->save();
            }else{
                $filename = IceHelper::uploadImage($req, 'setting/photo/');
                if ($filename) {
                    $settingupdate->fill(['value' => $filename])->save();
                }
            }

        }

        return redirect()->back()->withFlashMessage('Setting Updated');

    }
}
