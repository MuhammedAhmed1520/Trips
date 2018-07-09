<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        App\Models\Admin::insert(['username' => 'admin','password' => bcrypt('123456'),'email' => 'admin@admin.com','name'=>'admin']);
//        App\Models\Permission::insert(['title'=>'Create User','for'=>'user']);
//        App\Models\Permission::insert(['title'=>'Edit User','for'=>'user']);
//        App\Models\Permission::insert(['title'=>'Delete User','for'=>'user']);
//        App\Models\Permission::insert(['title'=>'Create Trip','for'=>'trip']);
//        App\Models\Permission::insert(['title'=>'Edit Trip','for'=>'trip']);
//        App\Models\Permission::insert(['title'=>'Delete Trip','for'=>'trip']);
//        App\Models\Permission::insert(['title'=>'Create Category','for'=>'category']);
//        App\Models\Permission::insert(['title'=>'Edit Category','for'=>'category']);
//        App\Models\Permission::insert(['title'=>'Delete Category','for'=>'category']);
//        App\Models\Permission::insert(['title'=>'Create Slider','for'=>'slider']);
//        App\Models\Permission::insert(['title'=>'Edit Slider','for'=>'slider']);
//        App\Models\Permission::insert(['title'=>'Delete Slider','for'=>'slider']);
//        App\Models\Role::insert(['title' => 'Super Admin']);

//        \App\Models\Setting::insert(['namesetting'=>'Title','type'=>0,'slug'=>str_slug('Title','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Email','type'=>0,'slug'=>str_slug('Email','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Logo','type'=>2,'slug'=>str_slug('Logo','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Favicon','type'=>2,'slug'=>str_slug('Favicon','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Phone','type'=>0,'slug'=>str_slug('Phone','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Address','type'=>0,'slug'=>str_slug('Address','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Facebook','type'=>0,'slug'=>str_slug('Facebook','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Google Plus','type'=>0,'slug'=>str_slug('Google Plus','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Description','type'=>1,'slug'=>str_slug('Description','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Meta Keywords','type'=>1,'slug'=>str_slug('Meta Keywords','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Meta Description','type'=>1,'slug'=>str_slug('Meta Description','-')]);


//        \App\Models\Setting::insert(['namesetting'=>'Twitter','type'=>0,'slug'=>str_slug('Twitter','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'LinkedIn','type'=>0,'slug'=>str_slug('LinkedIn','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Vimeo','type'=>0,'slug'=>str_slug('Vimeo','-')]);
        \App\Models\Setting::insert(['namesetting'=>'About Us','type'=>1,'slug'=>str_slug('About Us','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Dribble','type'=>0,'slug'=>str_slug('Dribble','-')]);
//        \App\Models\Setting::insert(['namesetting'=>'Flickr','type'=>0,'slug'=>str_slug('Flickr','-')]);
//

    }
}
