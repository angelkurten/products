<?php


namespace App\Utilities\Contract;

use SplFileInfo;

interface ImportFileInterface
{

    public function file(SplFileInfo $fileInfo);

}