<!--=====================================
Breadcrumb
======================================-->  

<?php include "modules/breadcrumb.php" ?>

<!--=====================================
Categories Content
======================================--> 

<div class="container-fuid bg-white my-4">

    <div class="container">

    	<!--=====================================
		Layout Categories
		======================================--> 

	    <div class="ps-layout--shop">
        
	        <section>

        	<!--=====================================
			Products found
			======================================--> 
			
			<?php include "modules/showcase.php" ?>

            </section>

        </div><!-- End Layout Categories -->

	</div><!-- End Container -->

</div><!-- End Container Fluid -->
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