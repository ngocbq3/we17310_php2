<?php

namespace App;

class ClassB implements InterfaceModel
{
    public function show()
    {
        echo "<br />Hiển thị thông tin bài viết";
    }
    public function insert($name)
    {
        echo "<br />Thêm vào 1 bài viết có  tên: $name";
    }
    public function create($color)
    {
        echo "<br />Tạo thuộc tính màu $color làm nhãn cho bài viết tốt";
    }
}
