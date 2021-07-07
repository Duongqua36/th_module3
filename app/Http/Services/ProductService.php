<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductService
{
    protected ProductRepository $productRepo;


    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepo = $productRepository;
    }

    public function getAll()
    {
        return $this->productRepo->getAll();
    }

    function store($request)
    {
        $products = new Product();
        $products ->fill($request->all());
        $this->productRepo->store($products);
    }

    public function getById($id){
        return $this->productRepo->getById($id);
    }
}
