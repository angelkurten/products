<?php


namespace App\Imports;


use App\Entities\Product;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        return new Product([
            'name'=> $row[0],
            'reference'=> $row[1],
            'price'=> $row[2],
            'cost'=> $row[3],
            'stock'=> $row[4],
            'state'=> $row[5],
        ]);
    }
}