<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     */
    protected $policies = [
        \App\Models\Course::class => \App\Policies\CoursePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // 🔥 Register policies
        $this->registerPolicies();

        // Define gates
        Gate::define('create-course', function ($user) {
            return $user->access === 'admin' || $user->access === 'instructor';
        });

        Gate::define('view-users', function ($user) {
            return $user->access === 'admin';
        });
    }
}
