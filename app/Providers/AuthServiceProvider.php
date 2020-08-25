<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-nav', function($user){
            return $user->hasRole('admin');
        });

        Gate::define('faculty-nav', function($user){
            return $user->hasRole('faculty');
        });

        Gate::define('student-nav', function($user){
            return $user->hasRole('student');
        });
    }
}
