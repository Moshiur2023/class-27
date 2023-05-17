<?php


namespace App\classes;


class Brand
{

    public $brands=[];
    public function __construct()
    {
        $this->brands=[
            [
                'id'=>1,
                'brand_name'=>'technical publication',
            ],
            [
                'id'=>2,
                'brand_name'=>'Nike',
            ],
            [
                'id'=>3,
                'brand_name'=>'AMA',
            ],
        ];
    }
    public function allBrand(){
        return $this->brands;
    }
    public function getBrandInfo($brandId){
        $brands = $this->allBrand();
        foreach($brands as $brand){
            if($brand['id'] == $brandId){
                return $brand['brand_name'];
            }
        }
    }
}