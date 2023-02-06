<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\Models\CategoryModel;

$cate = new CategoryModel;
// var_dump(CategoryModel::all());
// $data = [
//     // 'cate_name' => 'Oppo',
//     'slug' => 'oppo',
//     'desc' => 'Điện thoại Oppo New'
// ];
// // $cate->insert($data);

// $cate->update("19 OR cate_name='Samsung'", $data);
echo "<pre>";
var_dump(
    $cate->where('cate_name', '=', 'Samsung')
        ->orWhere('desc', '=', 'skirt')
        ->get()
);
