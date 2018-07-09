<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Trip;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //

    public function upload(Request $request){
//        $photo = new Photo();

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('uploads/trip/photos/'),$filename);

        $trip = Trip::find($request->trip_id);

        $photos = $trip->photos()->create([
            'trip_id' =>$request->trip_id,
            'photo' => $filename
        ]);

        return $photos;
    }

    public function destroy(Request $request,$id)
    {

//        $this->validate($request,[
//           'delete[]' => 'required'
//        ]);
        //
        $trip = Trip::find($id);

        foreach ($request->delete as $photoId){

            $photo = Photo::find($photoId);
            unLink(base_path().'/public/uploads/trip/photos/'.$photo->photo);
            $photo->delete();

        }


        return redirect()->back()->withFlashMessage('Photos Deleted !!');
    }
}
