<?php

namespace App\Http\Controllers;

use Facades\App\Helper\IceHelper;
use App\Models\Advantages;
use Illuminate\Http\Request;

class advantagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        //
        $advantages = Advantages::all();
        return view('admin.advantage.index',compact('advantages'));
    }

    public function create()
    {

            return view('admin.advantage.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:50',
            'description' => 'required',
        ]);

        $advantage = new Advantages();

        $advantage->title = $request->title;
        $advantage->description = $request->description;
        if ($advantage->photo){
            $advantage->photo = IceHelper::uploadImage($request->file('photo'),'advantage/');
        }else{
            $advantage->photo = null;
        }
        $advantage->save();
        return redirect('/admin/advantage')->withFlashMessage('Advantage Added !!');
    }

    public function edit($id)
    {
        //
        $advantage = Advantages::find($id);
            return view('admin.advantage.edit',compact('advantage'));

    }

    public function update(Request $request, $id)
    {
        //

        $this->validate($request,[
            'title' => 'required|max:50',
            'description' => 'required'
        ]);

        $advantage = Advantages::find($id);

        $advantage->title       = $request['title'];
        $advantage->description = $request['description'];

        if($file = $request->file('photo')){
            unLink(base_path().'/public/uploads/advantage/'.$advantage->photo);
            $advantage->photo = IceHelper::uploadImage($request->file('photo'),'advantage/');
        }else{
            $advantage->photo = $advantage->photo;
        }
        $advantage->save();

        return redirect('/admin/advantage')->withFlashMessage('Advantage Edited !!');
    }

    public function destroy($id)
    {
        //

        $advantage = Slider::find($id);
            unLink(base_path().'/public/uploads/advantage/'.$advantage->photo);
        $advantage->delete();
            return redirect()->back()->withFlashMessage('Advantage Deleted !!');

    }
}
