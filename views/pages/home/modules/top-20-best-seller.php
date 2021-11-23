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
<script>
  window.watsonAssistantChatOptions = {
    integrationID: "f8d7eed0-1c0e-4b41-9b44-22d3088445d9", // The ID of this integration.
    region: "us-south", // The region your integration is hosted in.
    serviceInstanceID: "61508122-c4cc-4bb4-adaf-417d75ab8944", // The ID of your service instance.
    onLoad: function(instance) { instance.render(); }
  };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
  });
</script>


