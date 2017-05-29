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
//    protected $policies = [
  //      'App\Model' => 'App\Policies\ModelPolicy',
    //];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

<<<<<<< HEAD
        Gate::define('delete-post', function ($user, $article) {
            return $user->id == $article->user_id;
        });
=======
/*        Gate::define('doIt', function ($user, $permission) {
            foreach ($user->currentRolePermissions as $item) {
                if ($item->permission_text == $permission) return true;
            }
            return false;
        });*/
>>>>>>> 4aa5d2c84e9dad44fecc1e687300e1355c596de5
    }
}
