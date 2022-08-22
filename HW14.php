<?php
class Product {
    public function get($name) {}
    public function set($name, $value) {}
}
class ProductChange {
    public function save(Product $product) {}
    public function update(Product $product) {}
    public function delete(Product $product) {}
}

class ProductView {
    public function show(ProductChange $productChange, Product $product) {}
    public function print(ProductChange $productChange, Product $product) {}
}
