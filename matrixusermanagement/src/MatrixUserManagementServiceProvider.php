<?php
namespace Mukul\Matrixusermanagement;

use Illuminate\Support\ServiceProvider;

class MatrixUserManagementServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'matrixusermanagement');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register()
    {

    }
}
