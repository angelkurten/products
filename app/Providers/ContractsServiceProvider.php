<?php

namespace App\Providers;

use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Product\EloquentProductRepository;
use App\Usescases\Contracts\GetProductsUsecaseInterface;
use App\Usescases\Product\GetProductsUsecase;
use App\Utilities\Contract\ImportFileInterface;
use App\Utilities\ImportCsv;
use Illuminate\Support\ServiceProvider;

class ContractsServiceProvider extends ServiceProvider
{
    private $classes = [
        //Repositories
        ProductRepositoryInterface::class => EloquentProductRepository::class,

        //Usescases
        GetProductsUsecaseInterface::class => GetProductsUsecase::class,

        //Classes
        ImportFileInterface::class => ImportCsv::class
    ];


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->classes as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
