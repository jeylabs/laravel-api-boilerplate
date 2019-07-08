<?php

namespace App\Providers;

use App\Helpers\PolicyHelper;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadPolicies();
        $this->registerPolicies();

        //register the passport routes
        Passport::routes();

        Passport::tokensExpireIn(now()->addDays(15));
        Passport::refreshTokensExpireIn(now()->addDays(30));
        Passport::personalAccessTokensExpireIn(now()->addMonths(6));
    }


    /**
     * Load the application polices from Policies directory
     */
    protected function loadPolicies(){
        $this->policies = PolicyHelper::getPolices();
    }
}
