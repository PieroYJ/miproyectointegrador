<!--=====================================
Home Content
======================================-->  

<div id="homepage-6">

    <!--=====================================
    Home Banner
    ======================================-->  

    <?php include "modules/horizontal-slider.php" ?>

    <!--=====================================
    Home Features
    ======================================-->  

    <?php include "modules/features.php" ?>

    <!--=====================================
    Home Promotions
    ======================================-->  

    <?php include "modules/default-banner.php" ?>

    <!--=====================================
    Home Deal Hot Today
    ======================================-->  

    <div class="ps-deal-hot">

        <div class="container">

            <div class="row">

                <!--=====================================
                Column Deal Hot
                ======================================-->  

                <?php include "modules/deal-hot-today.php" ?>

                  <!--=====================================
                Column Top 20 Best Seller
                ======================================-->  

               <?php include "modules/top-20-best-seller.php" ?>

            </div>

        </div>

    </div><!-- End Home Deal Hot -->
 
    <!--=====================================
    Top Categoríes
    ======================================-->  

    <?php include "modules/top-categories.php" ?>

</div><!-- End Homepage 6-->

<!--=====================================
Section Gray
======================================-->  

<?php include "modules/section-gray.php" ?>
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