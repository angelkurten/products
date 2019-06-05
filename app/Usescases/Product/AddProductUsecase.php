<?php


namespace App\Usescases\Product;


use App\Entities\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Usescases\Product\Contracts\AddProductUsecaseInterface;

class AddProductUsecase implements AddProductUsecaseInterface
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;


    /**
     * RemoveProductUsecase constructor.
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {

        $this->productRepository = $productRepository;
    }

    /**
     * @param $id
     * @param $stock
     * @return Product
     */
    public function handle($id, $stock)
    {
        return $this->productRepository->addStock($id, $stock);
    }
}