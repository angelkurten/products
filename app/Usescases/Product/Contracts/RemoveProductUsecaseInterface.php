<?php


namespace App\Usescases\Product\Contracts;


interface RemoveProductUsecaseInterface
{

    public function handle($id, $stock);

}