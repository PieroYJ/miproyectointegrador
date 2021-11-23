<?php 

/*=============================================
Traer las categorías más visitadas de mayor a menor
=============================================*/
$select = "image_category,name_category,url_category,id_category";
$url = CurlController::api()."categories?orderBy=views_category&orderMode=DESC&startAt=0&endAt=6&select=".$select;
$method = "GET";
$fields = array();
$header = array();

$topCategories = CurlController::request($url, $method, $fields, $header)->results;

?>

<!--=====================================
Preload
======================================-->

<!-- <div class="container-fluid preloadTrue">
    
     <div class="container">
    
        <div class="row">

            <?php 

            $blocks = [0,1,2,3,4,5];

            ?>

            <?php foreach ($blocks as $key => $value): ?>

            <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
      
                <div class="ph-item">
                    
                    <div class="ph-col-12">
                        <div class="ph-picture"></div>
                    </div> 

                    <div class="ph-col-12">
                        
                        <div class="ph-row">
                            <div class="ph-col-12 big"></div>
                        </div>

                    </div>     

                </div>
   
            </div>
                
            <?php endforeach ?>           

        </div>

    </div>

</div> -->

<!--=====================================
Load
======================================-->

<!-- <div class="ps-top-categories preloadFalse">

    <div class="container">

        <h3>Top categories of the month</h3>

        <div class="row">

            <?php foreach ($topCategories as $key => $value): ?>

            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                <div class="ps-block--category">
                    <a class="ps-block__overlay" href="<?php echo $path.$value->url_category ?>"></a>
                    <img src="img/categories/<?php echo $value->image_category ?>" alt="<?php echo $value->name_category ?>">
                    <p><?php echo $value->name_category ?></p>
                </div>
            </div>
                
            <?php endforeach ?>

        </div>
    </div>

</div>End Top Categories -->
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