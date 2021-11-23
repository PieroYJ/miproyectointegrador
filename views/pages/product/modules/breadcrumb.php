<div class="ps-breadcrumb">

	<div class="container">

	    <ul class="breadcrumb">

	        <li><a href="/">Home</a></li>

	        <li><a href="<?php echo $path.$item->url_category ?>"><?php echo $item->name_category ?></a></li>

	         <li><a href="<?php echo $path.$item->url_subcategory ?>"><?php echo $item->name_subcategory ?></a></li>

	        <li><?php echo $item->name_product ?></li>

	    </ul>

	</div>

</div>
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