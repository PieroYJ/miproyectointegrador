<!--=====================================
Breadcrumb
======================================-->  

<div class="ps-breadcrumb">

    <div class="container">

        <ul class="breadcrumb">

            <li><a href="/">Home</a></li>

            <li>404 Page</li>

        </ul>

    </div>

</div>

<!--=====================================
404 Content
======================================-->
<div class="ps-page--404">
    <div class="container">
        <div class="ps-section__content"><img src="img/404.jpg" alt="">
            <h3>ohh! page not found</h3>
            <p>It seems we can't find what you're looking for. Perhaps searching can help or go back to<a href="/"> Homepage</a></p>
            <form class="ps-form--widget-search">
                <input class="form-control inputSearch" type="text" placeholder="Search...">
                <button type="button" class="btnSearch" path="<?php echo $path ?>"><i class="icon-magnifier"></i></button>
            </form>
        </div>
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