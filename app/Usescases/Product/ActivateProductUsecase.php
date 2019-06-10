<?php


namespace App\Usescases\Product;


use App\Repositories\Product\EloquentProductRepository;
use App\Usescases\Product\Contracts\ActivateProductUsecaseInterface;

class ActivateProductUsecase implements ActivateProductUsecaseInterface
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

    /**
     * @param $object
     * @return \App\Entities\Product
     */
    public function handle($object)
    {
        return $this->productRepository->updateStatus($object->id, true);
    }
}