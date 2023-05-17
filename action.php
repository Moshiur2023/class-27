<?php
require_once 'vendor/autoload.php';
use App\classes\student;
use App\classes\Product;
use App\classes\Category;
use App\classes\Gellery;

$product = new Product();

$category = new Category();
    $categories =$category->allCategory();


if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        $student = new Student();
        $students = $student->allStudent();
        include 'pages/home.php';
    }
    elseif($_GET['page']=='product'){
        $products = $product->allProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['page'] == 'details'){
        $productID = $_GET['id'];
        $product = $product->productDetails($productID);
        include 'pages/product-details.php';
    }
    elseif ($_GET['page'] == 'category'){
        $categoryId = $_GET['id'];
        $products = $product->getProductByCategoryId($categoryId);

        include 'pages/category.php';
    }
    elseif ($_GET['page'] == 'gallery'){
        $galleryId = $_GET['id'];
        $products = $product->getProductByCategoryId($galleryIdId);

        include 'pages/category.php';
    }
}

?>
