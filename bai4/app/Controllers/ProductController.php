<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        return $this->view('admin/products/list', ['products' => $products]);
    }
    public function create()
    {
        return $this->view('admin/products/add');
    }

    public function store(Request $request)
    {
        var_dump($request->getBody());
    }
}
