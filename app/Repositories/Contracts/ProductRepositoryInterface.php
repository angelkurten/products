<?php


namespace App\Repositories\Contracts;


use Illuminate\Database\Eloquent\Model;

interface ProductRepositoryInterface
{

    /**
     * @return Model
     */
    public function getModel();

    public function all();

}