 {% extends 'templates/default.php' %}

     {% block content %}
   <section class="profilebody">

       <div class="infosection" style="text-align: center">
          <img src="http://reformstudios.net/wp-content/uploads/2016/11/reform-YOGA-FITNESS-logo-design-copy-1.jpg" alt="reform">

       </div>

       <div class="infosection" style="text-align: center">
           <img  src="https://cache.net-a-porter.com/alfresco/nap/webAssets/webPageElements/product-listing/desktop/common/en/shared/global/images/whats-new/Slot4/promo.jpg?v=1.2" alt="whats new">
         <h1>#News - Whats new at Reform</h1>
         <h3> - Keeping you informed - </h3>
         <h4>{{ "now"|date("m/d/Y") }}</h4>
           <h2>
             What is Lorem Ipsum?
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h2>
       </div>
   </section>

   <section class="sidebar">
       <div class="row" id="button">
           <a href="{{ urlFor('contactus') }}" class="bannerbutton">Book an Appointment</a>
       </div>
       <div class="row" id="button">
           <a href="{{ urlFor('services') }}#nutrition" class="bannerbutton">Buy a Product</a>
       </div>
       <div class="row" style="height:50em"id="feed">
           <a class="twitter-timeline" href="https://twitter.com/hashtag/fitness" data-widget-id="849442077628870656">#fitness Tweets</a>
           <script>
               ! function(d, s, id) {
                   var js, fjs = d.getElementsByTagName(s)[0],
                       p = /^http:/.test(d.location) ? 'http' : 'https';
                   if (!d.getElementById(id)) {
                       js = d.createElement(s);
                       js.id = id;
                       js.src = p + "://platform.twitter.com/widgets.js";
                       fjs.parentNode.insertBefore(js, fjs);
                   }
               }(document, "script", "twitter-wjs");
           </script>

       </div>
   </section>
   {% endblock %}
