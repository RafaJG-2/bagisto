<?php
namespace MiEmpresa\MiModulo\Providers;

use Illuminate\Support\ServiceProvider;

class MiModuloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        include __DIR__.'/../routes/web.php';
    }
    
    public function register()
    {
    }
}
