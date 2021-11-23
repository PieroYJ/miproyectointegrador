<?php 

$select = "url_product,image_product,name_product,offer_product,price_product,url_category";

$url = CurlController::api()."relations?rel=products,categories&type=product,category&orderBy=sales_product&orderMode=DESC&startAt=0&endAt=20&select=".$select;
$method = "GET";
$fields = array();
$header = array();

$topSalesProducts = CurlController::request($url, $method, $fields, $header)->results;

$topSales = array();

/*=============================================
Organizar bloques de a 5 productos
=============================================*/

for($i = 0; $i < ceil(count($topSalesProducts)/4); $i++){

    array_push($topSales, array_slice($topSalesProducts, $i*4 , 4));

}

?>


