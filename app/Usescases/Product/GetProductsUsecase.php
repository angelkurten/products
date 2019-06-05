<?php


namespace App\Usescases\Product;


use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Usescases\Contracts\GetProductsUsecaseInterface;

class GetProductsUsecase implements GetProductsUsecaseInterface
{

    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {

        $this->productRepository = $productRepository;
    }


    public function handle()
    {
        return $this->productRepository->all();
    }
}