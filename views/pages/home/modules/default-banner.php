<?php 

/*=============================================
Traer 2 productos aleatoriamente
=============================================*/

$productsDefaultBanner = array_slice($productsHSlider, 0, 2);


?>

<!--=====================================
Preload
======================================-->

<div class="container-fluid preloadTrue">
    
    <div class="container">

        <div class="ph-item border-0">

            <div class="ph-col-6">

                <div class="ph-picture"></div>

            </div>

            <div class="ph-col-6">

                <div class="ph-picture"></div>

            </div>

        </div>

    </div>

</div>

<!--=====================================
Load
======================================-->

<!-- <div class="ps-promotions preloadFalse">

    <div class="container">

        <div class="row">

            <?php foreach ($productsDefaultBanner as $key => $value): ?>

                <div class="col-md-6 col-12 ">
                    <a class="ps-collection" href="<?php echo $path.$value->url_product ?>">
                        <img src="img/products/<?php echo $value->url_category ?>/default/<?php echo $value->default_banner_product ?>" alt="<?php echo $value->name_product ?>">
                    </a>
                </div>
                
            <?php endforeach ?>

        </div>

    </div>

</div>  !-- End Home Promotions--> <!---->
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