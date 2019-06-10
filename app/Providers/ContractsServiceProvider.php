<?php

namespace App\Providers;

use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Product\EloquentProductRepository;
use App\Usescases\Contracts\GetProductsUsecaseInterface;
use App\Usescases\Product\ActivateProductUsecase;
use App\Usescases\Product\AddProductUsecase;
use App\Usescases\Product\Contracts\ActivateProductUsecaseInterface;
use App\Usescases\Product\Contracts\AddProductUsecaseInterface;
use App\Usescases\Product\Contracts\DeactivateProductUsecaseInterface;
use App\Usescases\Product\Contracts\RemoveProductUsecaseInterface;
use App\Usescases\Product\DeactivateProductUsecase;
use App\Usescases\Product\GetProductsUsecase;
use App\Usescases\Product\RemoveProductUsecase;
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
        AddProductUsecaseInterface::class => AddProductUsecase::class,
        RemoveProductUsecaseInterface::class => RemoveProductUsecase::class,
        ActivateProductUsecaseInterface::class => ActivateProductUsecase::class,
        DeactivateProductUsecaseInterface::class => DeactivateProductUsecase::class,

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
