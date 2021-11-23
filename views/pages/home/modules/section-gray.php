
<!--=====================================
Preload
======================================-->

<!-- <div class="container-fluid preloadTrue">
    
     <div class="container">

        <div class="ph-item">

            <div class="ph-col-2">

                <div class="ph-row">

                    <div class="ph-col-12 big"></div>

                    <div class="ph-col-12 empty"></div>

                    <div class="ph-col-12 empty"></div>

                    <div class="ph-col-8"></div>

                    <div class="ph-col-4 empty"></div>

                    <div class="ph-col-12 empty"></div>

                    <div class="ph-col-12"></div>

                    <div class="ph-col-12 empty"></div>

                    <div class="ph-col-12"></div>

                    <div class="ph-col-12 empty"></div>

                    <div class="ph-col-12"></div>

                    <div class="ph-col-12 empty"></div>

                    <div class="ph-col-12"></div>

                    <div class="ph-col-12 empty"></div>

                    <div class="ph-col-12"></div>

                </div>

            </div>

            <div class="ph-col-2">

                <div class="ph-picture" style="height:500px"></div> 

            </div>

             <div class="ph-col-8">

               <div class="ph-picture" style="height:500px"></div> 

            </div>

        </div>

    </div>

</div> -->

<!--=====================================
Load
======================================-->

<div class="ps-section--gray preloadFalse">

</div><!-- End Section Gray-->
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