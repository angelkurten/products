<?php


namespace App\Repositories\Product;


use App\Entities\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\EloquentBaseRepository;
use Illuminate\Database\Eloquent\Model;

class EloquentProductRepository extends EloquentBaseRepository implements ProductRepositoryInterface
{

    /**
     * @return Model|string
     */
    public function getModel()
    {
        return new Product();
    }

    public function all()
    {
        return $this->getModel()->all();
    }
}