<?php


namespace App\Utilities;


use App\Imports\ProductImport;
use App\Utilities\Contract\ImportFileInterface;
use Maatwebsite\Excel\Facades\Excel;
use SplFileInfo;

class ImportCsv implements ImportFileInterface
{

    public function file(SplFileInfo $fileInfo)
    {
        try{
            Excel::import(new ProductImport(), $fileInfo);
            return true;
        } catch (\Exception $e) {
            dd($e);
            return false;
        }

    }
}