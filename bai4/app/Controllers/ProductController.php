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
        $product = $request->getBody();
        $product['image'] = $_FILES['image']['name'];

        move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);

        $p = new ProductModel();
        $p->insert($product);

        header("location:/product");
        die;
    }
}
