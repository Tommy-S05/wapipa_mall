<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class CategoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void {

        view()->composer("*", function($view) {
            $categories = Category::getAllCategories();
            $view->with('categories', $categories);
        });
    }
}
