<?php

namespace App\Http\Controllers;

use App\Mail\MyMail;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Subscribe;
use Facades\App\Helper\IceHelper;
use App\Http\Requests\tripRequest;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Image;


class TripController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Getting all Trips
        $trips = Trip::all();
        $bookings = Booking::all();
        return view('admin.trip.index',compact('trips','bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->can('trips.create')){
            $category = Category::all();
            return view('admin.trip.create',compact('category'));
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tripRequest $request)
    {

        $trip = new Trip();
        $trip->title       = $request['title'];
        $trip->price       = $request['price'];
        $trip->currency    = $request['currency'];
        $trip->description = $request['description'];
        $trip->include     = $request['include'];
        $trip->not_include = $request['not_include'];
        $trip->program     = $request['program'];
        $trip->note        = $request['note'];
        $trip->url_slug = str_slug($request->title,'-');


        $trip->photo = IceHelper::uploadImage($request->file('photo'),'trip/cover/');

//
//        $file = $request->file('photo');
//        $trip->photo = $file->getClientOriginalName();
//        $photo = \Intervention\Image\Facades\Image::make($request->file('photo'))->save(public_path('images/trip/'.$trip->photo),50);
//
        $trip->meta_title  = $request['meta_title'];
        $trip->meta_description  = $request['meta_description'];
        $trip->meta_keywords  = $request['meta_keywords'];

        $trip->save();

        

        $trip->categories()->sync($request->category_id);

//        $trip = Trip::find($request->trip_id);

        foreach ($request->img as $image){

            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads/trip/photos/'),$filename);
            $photos = $trip->photos()->create([
                'trip_id' =>$trip->id,
                'photo' => $filename
            ]);
        }


        return redirect('/admin/trip')->withFlashMessage('Trip Added !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $trip = Trip::find($id);
//        dd($trip);
        $bookings = $trip->bookings;
        return view('admin.trip.show',compact('trip','bookings'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if (Auth::user()->can('trips.update')) {

            $trip = Trip::with('categories')->find($id);
            $category = Category::all();
            return view('admin.trip.edit', compact('trip', 'category'));
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $trip = Trip::find($id);
        
        $trip->title       = $request['title'];
        $trip->price       = $request['price'];
        $trip->currency    = $request['currency'];
        $trip->description = $request['description'];
        $trip->include     = $request['include'];
        $trip->not_include = $request['not_include'];
        $trip->program     = $request['program'];
        $trip->note        = $request['note'];
        $trip->url_slug = str_slug($request->title,'-');


        if($file = $request->file('photo')){
            unLink(base_path().'/public/uploads/trip/cover/'.$trip->photo);
//            $trip->photo = $file->getClientOriginalName();
            $trip->photo = IceHelper::uploadImage($request->file('photo'),'trip/cover/');

//            $photo = \Intervention\Image\Facades\Image::make($request->file('photo'))->save(public_path('images/trip/'.$trip->photo),50);
        }else{
            $trip->photo = $trip->photo;
        }

        $trip->meta_title  = $request['meta_title'];
        $trip->meta_description  = $request['meta_description'];
        $trip->meta_keywords  = $request['meta_keywords'];


        if($trip->save()){
            $trip->categories()->sync($request->category_id);
            return redirect('/admin/trip')->withFlashMessage('Trip Edited !!');


        }
        return redirect('/admin/trip');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (Auth::user()->can('trips.delete')) {
            $trip = Trip::find($id);
            unLink(base_path() . '/public/uploads/trip/cover/' . $trip->photo);

            //get the photos
            $photos = $trip->photos();


            // delete the photos
            foreach ($trip->photos as $photo) {
                unLink(base_path() . '/public/uploads/trip/photos/' . $photo->photo);
            }

            //delete DB record
            $trip->photos()->delete();

            $trip->delete();
            return redirect()->back()->withFlashMessage('Trip Deleted !!');
        }
        return redirect()->back();
    }

    public function email($id,Request $request,Mailer $mailer){

        $trip = Trip::find($id);
        $subscribers = Subscribe::all();
        foreach ($subscribers as $subscriber){
            $mailer->to($subscriber->email)->send(new MyMail($trip->title,$trip->price,$trip->description,$trip->include,$trip->not_include,$trip->note,$trip->program));
        }

        return redirect()->back();
    }
}
