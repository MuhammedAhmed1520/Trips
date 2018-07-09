<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('trips','App\Policies\TripPolicy');
        Gate::define('trips.slider','App\Policies\TripPolicy@slider');
        Gate::define('trips.category','App\Policies\TripPolicy@category');

        Gate::resource('admins','App\Policies\AdminPolicy');
        Gate::resource('categories','App\Policies\CategoryPolicy');
        Gate::resource('sliders','App\Policies\SliderPolicy');
    }
}
