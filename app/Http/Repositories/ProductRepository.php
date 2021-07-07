<?php


namespace App\Http\Repositories;


use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductRepository
{
    protected Product $productModel;


    public function __construct(Product $product)
    {
        $this->productModel = $product;
    }

    public function getAll()
    {
        return $this->productModel->get();
    }

    public function store($product)
    {
        $product->save();
    }
    public function getById($id)
    {
        return $this->productModel->findOrFail($id);
    }

}
