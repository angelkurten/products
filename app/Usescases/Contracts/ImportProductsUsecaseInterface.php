<?php


namespace App\Usescases\Contracts;


use SplFileInfo;

interface ImportProductsUsecaseInterface
{


    public function handle(SplFileInfo $file);

}