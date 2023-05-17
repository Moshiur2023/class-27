<?php


namespace App\classes;

use App\classes\Category;


class product
{
    public $products=[],$result=[];
    public function __construct()
    {
        $this->products=[
          [
              'id'=>1,
              'category_id'=>2,
              'brand_id'=>1,
              'name'=>'new book',
              'price'=>550,
              'image'=>'library.png',
              'description'=>'orem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquid aperiam, blanditiis, culpa cumque esse et explicabo fuga illo iusto laboriosam modi natus odio qui quia reiciendis suscipit vero?'
          ]  ,
            [
                'id'=>2,
                'category_id'=>2,
                'brand_id'=>1,
                'name'=>'basketball',
                'price'=>550,
                'image'=>'basketball.png',
                'description'=>'orem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquid aperiam, blanditiis, culpa cumque esse et explicabo fuga illo iusto laboriosam modi natus odio qui quia reiciendis suscipit vero?'
            ]  ,
            [
                'id'=>3,
                'category_id'=>2,
                'brand_id'=>1,
                'name'=>'Cafeteria',
                'price'=>550,
                'image'=>'cafeteria.png',
                'description'=>'orem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquid aperiam, blanditiis, culpa cumque esse et explicabo fuga illo iusto laboriosam modi natus odio qui quia reiciendis suscipit vero?'
            ]  ,
        ];
    }
    public function allProduct(){
        return $this->products;
    }
    public function productDetails($id){
        $products =$this->allProduct();
        foreach($products as $product){
            if($product['id'] == $id){
                $category = new Category();
                $categoryById = $category->getCategoryInfo($product['category_id']);
                $product['category_name'] = $categoryById['category_name'];

                $brands = new Brand();
                $brandById = $brands->getBrandInfo($product['brand_id']);
                $product['brand_name'] = $brandById;

                return $product;
            }
        }
    }
    public function getProductByCategoryId($catId){
        $products = $this->allProduct();
        foreach($products as $product){
            if($product['category_id'] == $catId){
                array_push($this->result, $product);
            }
        }
        return $this->result;
    }
}