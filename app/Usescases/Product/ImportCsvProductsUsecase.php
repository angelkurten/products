<?php


namespace App\Usescases\Product;


use App\Usescases\Contracts\ImportProductsUsecaseInterface;
use App\Utilities\ImportCsv;
use SplFileInfo;


class ImportCsvProductsUsecase implements ImportProductsUsecaseInterface
{

    /**
     * @var ImportCsv
     */
    private $importFile;

    public function __construct()
    {
        $this->importFile = new ImportCsv();
    }


    public function handle(SplFileInfo $file)
    {
        return $this->importFile->file($file);
    }
}