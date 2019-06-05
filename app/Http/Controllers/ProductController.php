<?php

namespace App\Http\Controllers;

use App\Usescases\Contracts\ImportProductsUsecaseInterface;
use App\Usescases\Product\GetProductsUsecase;
use App\Usescases\Product\ImportCsvProductsUsecase;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(GetProductsUsecase $getProductsUsecase)
    {
        $products = $getProductsUsecase->handle();
        return view('products.index', compact('products'));
    }

    public function import(ImportCsvProductsUsecase $csvProductsUsecase, Request $request)
    {
        if(!is_null($request->file('csv'))){
            $csvProductsUsecase->handle($request->file('csv'));
        }


        return redirect()->back();
    }
}
