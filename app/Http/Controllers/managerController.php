<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;

class managerController extends Controller
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
        $managers = Admin::all();
        return view('admin.manager.index',compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.manager.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:admins',
            'password' =>'required|string|max:10|confirmed',
            'role' => 'required'
        ]);

        $request['password'] = bcrypt($request->password);
        $admin = Admin::create($request->all());

        $admin->roles()->sync($request->role);
//        Admin::find($id)->roles()->sync($request->role);


        return redirect('/admin/manager')->withFlashMessage('Manager Stored');

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
        $manager = Admin::find($id);
        $roles = Role::all();
        return view('admin.manager.edit',compact('roles','manager'));
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
            'username' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);
        $manager = Admin::find($id)->update($request->except('_token','_method','role'));
        Admin::find($id)->roles()->sync($request->role);
        return redirect('/admin/manager')->withFlashMessage('Manager Edited');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id)->delete();
        return redirect('/admin/manager')->withFlashMessage('Manager Deleted');
    }
}
