<div class="ps-product__thumbnail" data-vertical="true">

    <figure>

        <div class="ps-wrapper">

            <div class="ps-product__gallery" data-arrow="true">

                <?php 

                    $gallery = json_decode($item->gallery_product,true);
                   
                ?>

                <?php foreach ($gallery as $index => $image): ?>

                <div class="item">
                    <a href="img/products/<?php echo $item->url_category ?>/gallery/<?php echo $image ?>">
                        <img src="img/products/<?php echo $item->url_category ?>/gallery/<?php echo $image ?>" alt="<?php echo $item->name_product ?>">
                    </a>
                </div>
                    
                <?php endforeach ?>

            </div>

        </div>

    </figure>

    <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">

        <?php foreach ($gallery as $index => $image): ?>

            <div class="item">
                <img src="img/products/<?php echo $item->url_category ?>/gallery/<?php echo $image ?>" alt="<?php echo $item->name_product ?>">
            </div>
            
        <?php endforeach ?>

    </div>

</div><!-- End Gallery -->
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