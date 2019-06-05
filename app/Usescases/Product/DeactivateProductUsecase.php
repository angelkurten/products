<?php


namespace App\Usescases\Product;


use App\Repositories\Product\EloquentProductRepository;
use App\Usescases\Product\Contracts\DeactivateProductUsecaseInterface;

class DeactivateProductUsecase implements DeactivateProductUsecaseInterface
{

    /**
     * @var EloquentProductRepository
     */
    private $productRepository;

    /**
     * ActivateProductUsecase constructor.
     * @param EloquentProductRepository $productRepository
     */
    public function __construct(EloquentProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function handle($id)
    {
        return $this->productRepository->updateStatus($id, true);
    }
}