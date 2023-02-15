<?php

namespace App\Controllers;

use App\Models\CategoryModel;
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
        $categories = CategoryModel::all();
        return $this->view('admin/products/add', ['categories' => $categories]);
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

    public function show(Request $request)
    {
        $id = $request->getBody()['id'];
        $product = ProductModel::findOne($id);
        $categories = CategoryModel::all();

        return $this->view(
            'admin/products/edit',
            [
                'product' => $product,
                'categories' => $categories
            ]
        );
    }

    public function update(Request $request)
    {
        $data = $request->getBody();
        if ($_FILES['image']['size'] > 0) {
            $data['image'] = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $data['image']);
        }
        $p = new ProductModel();
        $p->update($data['id'], $data);
        header("Location:/product");
        exit;
    }

    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new ProductModel();
        $p->delete($id);
        header("location: /product");
        exit;
    }
}
