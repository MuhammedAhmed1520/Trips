<?php

namespace App\Helper;

class IceHelper{

    function getSetting($settingname = 'Title'){
        return \App\Models\Setting::where('namesetting',$settingname)->get()[0]->value;
    }

    function uploadImage($request,$destination){
        $filename = $request->getClientOriginalName();
//        $destinationpath = '/public/uploads'.$destination;
//        $request->move(base_path().$destinationpath,$filename);
          \Intervention\Image\Facades\Image::make($request)->save(public_path('uploads/'.$destination.$filename),50);
        return $filename;

    }
    function checkIconSize($request){

        $dimn = getimagesize($request);
        if ($dimn[0] < 30 ||$dimn[1] < 30){
            return true;
        }

    }

    function uploadThumb($request){

         \Intervention\Image\Facades\Image::make('public/uploads/category/photo/'.$request)
             ->resize(300,null,function ($ratio){
            $ratio->aspectRatio();
        })->save(public_path('uploads/category/photo/thumb/'.$request),50);

    }

}


