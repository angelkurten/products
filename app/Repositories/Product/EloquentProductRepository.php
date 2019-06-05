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

    /**
     * @param $id
     * @return Product
     */
    public function findById($id)
    {
        return $this->find($id);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|Model[]
     */
    public function all()
    {
        return $this->getModel()->all();
    }

    /**
     * @param $id
     * @param $stock
     * @return Product
     */
    public function addStock($id, $stock)
    {
        $product = $this->findById($id);
        $product->stock += $stock;
        $product->save();
        return $product;
    }

    /**
     * @param $id
     * @param $stock
     * @return Product
     */
    public function removeStock($id, $stock)
    {
        $product = $this->findById($id);
        $product->stock -= $stock;
        $product->save();
        return $product;
    }

    /**
     * @param $id
     * @param $status
     * @return Product
     */
    public function updateStatus($id, $status)
    {
        $product = $this->findById($id);
        $product->state = $status;
        $product->save();
        return $product;
    }
}