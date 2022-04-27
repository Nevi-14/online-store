<?php

namespace App\Providers;

use App\Models\Leads\Lead;

use App\Models\Contact\Contact;
use App\Models\Contact\TaskManager;
use App\Models\Contact\PropertyTracker;
use App\Policies\ContactPolicy;
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
        Contact::class => 'App\Policies\ContactPolicy',
        Lead::class => 'App\Policies\LeadPolicy',
        Product::class => 'App\Policies\ProductPolicy',
        Project::class => 'App\Policies\ProjectPolicy',
        PropertyTracker::class => 'App\Policies\TrackerPolicy',
        TaskManager::class => 'App\Policies\TaskManagerPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // ANCHOR Project Gates
        Gate::define('viewany-office', 'App\Policies\OfficePolicy@viewany');
        Gate::define('view-office', 'App\Policies\OfficePolicy@view');
        Gate::define('create-office', 'App\Policies\OfficePolicy@create');
        Gate::define('update-office', 'App\Policies\OfficePolicy@update');
        Gate::define('delete-office', 'App\Policies\OfficePolicy@delete');

        // ANCHOR Contact Gates
        Gate::define('viewany-contact', 'App\Policies\ContactPolicy@viewany');
        Gate::define('view-contact', 'App\Policies\ContactPolicy@view');
        Gate::define('create-contact', 'App\Policies\ContactPolicy@create');
        Gate::define('update-contact', 'App\Policies\ContactPolicy@update');
        Gate::define('delete-contact', 'App\Policies\ContactPolicy@delete');
        
        // ANCHOR Role Gates
        Gate::define('viewany-user', 'App\Policies\UserPolicy@viewany');
        Gate::define('view-user', 'App\Policies\UserPolicy@view');
        Gate::define('create-user', 'App\Policies\UserPolicy@create');
        Gate::define('update-user', 'App\Policies\UserPolicy@update');
        Gate::define('delete-user', 'App\Policies\UserPolicy@delete');

        // ANCHOR Role Gates

        Gate::define('viewany-role', 'App\Policies\RolePolicy@viewany');
        Gate::define('view-role', 'App\Policies\RolePolicy@view');
        Gate::define('create-role', 'App\Policies\RolePolicy@create');
        Gate::define('update-role', 'App\Policies\RolePolicy@update');
        Gate::define('delete-role', 'App\Policies\RolePolicy@delete');

       // ANCHOR Role Gates}

        Gate::define('viewany-tracker', 'App\Policies\TrackerPolicy@viewany');
        Gate::define('view-tracker', 'App\Policies\TrackerPolicy@view');
        Gate::define('create-tracker', 'App\Policies\TrackerPolicy@create');
        Gate::define('update-tracker', 'App\Policies\TrackerPolicy@update');
        Gate::define('delete-tracker', 'App\Policies\TrackerPolicy@delete');
            
 
         

        // ANCHOR Lead Gates
         Gate::define('viewany-lead', 'App\Policies\LeadPolicy@viewany');
         Gate::define('view-lead', 'App\Policies\LeadPolicy@view');
         Gate::define('create-lead', 'App\Policies\LeadPolicy@create');
         Gate::define('update-lead', 'App\Policies\LeadPolicy@update');
         Gate::define('delete-lead', 'App\Policies\LeadPolicy@delete');

        // ANCHOR Product Gates
        Gate::define('viewany-product', 'App\Policies\ProductPolicy@viewany');
        Gate::define('view-product', 'App\Policies\ProductPolicy@view');
        Gate::define('create-product', 'App\Policies\ProductPolicy@create');
        Gate::define('update-product', 'App\Policies\ProductPolicy@update');
        Gate::define('delete-product', 'App\Policies\ProductPolicy@delete');
                
        // ANCHOR Project Gates
        Gate::define('viewany-project', 'App\Policies\ProjectPolicy@viewany');
        Gate::define('view-project', 'App\Policies\ProjectPolicy@view');
        Gate::define('create-project', 'App\Policies\ProjectPolicy@create');
        Gate::define('update-project', 'App\Policies\ProjectPolicy@update');
        Gate::define('delete-project', 'App\Policies\ProjectPolicy@delete');
           
        

          // Task Manager
          Gate::define('viewany-task', 'App\Policies\TaskManagerPolicy@viewany');
          Gate::define('view-task', 'App\Policies\TaskManagerPolicy@view');
          Gate::define('create-task', 'App\Policies\TaskManagerPolicy@create');
          Gate::define('update-task', 'App\Policies\TaskManagerPolicy@update');
          Gate::define('delete-task', 'App\Policies\TaskManagerPolicy@delete');



    }
}
