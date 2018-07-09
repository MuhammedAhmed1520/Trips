<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Facades\App\Helper\IceHelper;
use Illuminate\Support\Facades\Auth;

class categoryController extends Controller
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
        $category = Category::all();


     //   return response()->json($category);

        return view('admin.category.index', compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('categories.create')) {
        $category = Category::all();

        return view('admin.category.create',compact('category'));
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoryRequest $request)
    {
        $category = new Category();
        $category->title = $request->title;
        $category->note = $request->note;

        if ($request->category_id == 0){
            $category->category_id = null;
        }else{
            $category->category_id= $request->category_id;
        }
        $category->url_slug = str_slug($request->title,'-');


        $category->meta_title = $request->meta_title;
        $category->meta_keywords = $request->meta_keywords;
        $category->meta_description = $request->meta_description;


        if($request->file('icon')){
            if (IceHelper::checkIconSize($request->file('icon'))){
                $category->icon = IceHelper::uploadImage($request->file('icon'),'category/icon/');

            }else{
                //            failed_message
                return redirect()->back()->withFailedMessage('The icon size is very big please select smaller size');
                //            return redirect()->back()->withFlashMessage('The icon size is very big please select smaller size');
            }
        }


        $category->photo = IceHelper::uploadImage($request->file('photo'),'category/photo/');

        $category->save();
        IceHelper::uploadThumb($category->photo);
//        $request->session()->flush();
        return redirect('/admin/category')->withFlashMessage('Category Added');

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->can('categories.update')) {
            $category = Category::find($id);
            $cats = Category::all();
            return view('admin.category.edit', compact('category', 'cats'));
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
            $this->validate($request,[
                'title' => 'required',
            ]);

            $category = Category::find($id);
            $category->title = $request->title;
            $category->note = $request->note;
            $category->meta_title = $request->meta_title;
            $category->meta_keywords = $request->meta_keywords;
            $category->meta_description = $request->meta_description;

            $category->url_slug = str_slug($request->title,'-');

            if ($request->category_id == 0){
                $category->category_id = null;
            }else{
                $category->category_id= $request->category_id;
            }


            if ($file = $request->file('icon')){
                unLink(base_path().'/public/uploads/icon/'.$category->icon);
                if (IceHelper::checkIconSize($request->file('icon'))){
                    $category->icon = IceHelper::uploadImage($request->file('icon'),'category/icon/');
                }else{
                    return redirect()->back()->withFlashMessage('The icon size is very big please select smaller size');
                }
            }else{
                $category->icon = $category->icon;
            }


            if ($file = $request->file('photo')){
                unLink(base_path().'/public/uploads/category/photo/'.$category->photo);
                unLink(base_path().'/public/uploads/category/photo/thumb/'.$category->photo);
                $category->photo = IceHelper::uploadImage($request->file('photo'),'category/photo/');
            }else{
                $category->photo = $category->photo;
            }

            $category->save();

            IceHelper::uploadThumb($category->photo);

            return redirect('/admin/category')->withFlashMessage('Category Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->can('categories.delete')) {
            $category = Category::find($id);
            if($category->photo){
                unLink(base_path() . '/public/uploads/category/photo/' . $category->photo);
                unLink(base_path() . '/public/uploads/category/photo/thumb/' . $category->photo);
            }
            if($category->icon){
                unLink(base_path() . '/public/uploads/category/icon/' . $category->icon);
            }
            $category->delete();
            return redirect()->back()->withFlashMessage('Category Deleted');
        }
        return redirect()->back();
    }
}
