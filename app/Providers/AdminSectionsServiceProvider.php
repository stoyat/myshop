<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{


    /**
     * @var array
     */
    protected $sections = [
        \App\Category::class => 'App\Http\Section\Categories',
        \App\Brand::class => 'App\Http\Section\Brands',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
