{% extends 'templates/default2.php' %}

 {% block title %}Reform - Services{% endblock %}
  {% block content %}
  <!-- Main Banner (jumbotron) -->
  <section class="banner" id="reformServices">
      <div>

          <div class="bannertext">
              <h1>Reform Services</h1>
              <h2>Wellness services for all aspects of your life</h2>

          </div>
      </div>
  </section>

  <section class="banner" id="fitness">
      <div>
          <div class="bannertext">
              <h1>Reform Fitness</h1>
              <h2><i>“A fit, healthy body—that is the best fashion statement” ― Jess C. Scott</i></h2>
          </div>
      </div>
  </section>

  <section class="description" id="generic">
      <div>
          <h3>Personalizing Fitness with a Hollistic Touch</h3>
          <h3>`````````````````````````````````````````````</h3>
          <h4>Reform is key</br></h4>
          <p>Scientific method to Mind Body and Soul.<br/> We are free-spirited and independent. We are infinite. We are you.<br/> We are your sidekick, your family, your colleague, your neighbour and your new bestfriend. <br/> We are a community of
              yogis dedicated to living, breathing and thriving in the modern world.</p>
          <a href="{{ urlFor('contactus') }}" class="bannerbutton">CONTACT US</a>
      </div>
  </section>

    <section class="banner" id="nutrition">
        <div>
            <div class="bannertext">
                <h1>Reform  Nutrition</h1>
                <h2>Meet Our Partners</h2>
            </div>
        </div>
    </section>

    <section class="partners">
      <div>
        <div class="thumbnail" id="SimplyRawExpress">
          <div class="thumbimage"></div>
          <div class="thumbcaption">
            <p>SimplyRaw Express is a gluten-free, plant-based and organic restaurant in Ottawa.  Specializing in cold-pressed juices and clean eating, our aim is to help you achieve optimal health and wellness.</p>
            <a href="http://www.simplyrawexpress.com/" class="btn-default" target="_blank">Visit Their Store</a>
          </div>
        </div>
        <div class="thumbnail" id="FarmBoy">
          <div class="thumbimage"></div>
          <div class="thumbcaption">
            <p>Farm Boy has been providing a fun and friendly, fresh-market shopping experience for over 30 years with legions of loyal fans in Brantford, Cambridge, Cornwall, Kingston, Kitchener, London, Ottawa, Pickering and Whitby. Our stores are brimming with wholesome, healthy, tasty food choices for you and your family and best of all, everything is fresh.</p>
            <a href="https://www.farmboy.ca/" class="btn-default" target="_blank">Visit Their Store</a>
          </div>
        </div>
      </div>
    </section>

    <section class="banner" id="lifecoaching">
        <div>
            <div class="bannertext">
                <h1>Reform  Life</h1>
                <h2>Nurture your soul</h2>
            </div>
        </div>
    </section>

    <section class="description" id="lifecoachingdescription">
        <div>
            <h3>What is Life Coaching?</h3>
            <h3>`````````````````````````````````````````````</h3>
            <p>A life coach is a professional who helps you reach a goal or make a change in your life. They help you to get out of your head and start taking action in the areas of your life that you wish to change. It is a source of motivation and inspiration that gives you the push you need to reach your full potential.</p>
        </div>
    </section>

    <section class="partners">
      <div>
        <h4>Read the testimonials</h4>
        <div class="thumbnail" id="TestJohnny">
          <div class="thumbimage"></div>
          <div class="thumbcaption">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis elit augue, id dictum metus finibus in. Nullam eget nisi vel mi lobortis venenatis. Nullam condimentum dapibus diam, quis posuere nibh porttitor vel. Praesent ultrices eu lacus sed mollis. Donec tincidunt auctor mollis. Aliquam non nunc et lectus sagittis commodo.</p>
            <p>- Johnny Que</p>
            <a href="{{ urlFor('contactus') }}" class="btn-default">CONTACT US</a>
          </div>
        </div>
        <div class="thumbnail" id="TestSam">
          <div class="thumbimage"></div>
          <div class="thumbcaption">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis elit augue, id dictum metus finibus in. Nullam eget nisi vel mi lobortis venenatis. Nullam condimentum dapibus diam, quis posuere nibh porttitor vel. Praesent ultrices eu lacus sed mollis. Donec tincidunt auctor mollis. Aliquam non nunc et lectus sagittis commodo.</p>
            <p>- Samantha Dennis</p>
            <a href="{{ urlFor('contactus') }}" class="btn-default">CONTACT US</a>
          </div>
        </div>
        <div class="thumbnail" id="TestSammy">
          <div class="thumbimage"></div>
          <div class="thumbcaption">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis elit augue, id dictum metus finibus in. Nullam eget nisi vel mi lobortis venenatis. Nullam condimentum dapibus diam, quis posuere nibh porttitor vel. Praesent ultrices eu lacus sed mollis. Donec tincidunt auctor mollis. Aliquam non nunc et lectus sagittis commodo.</p>
            <p>- Sammy True</p>
            <a href="{{ urlFor('contactus') }}" class="btn-default">CONTACT US</a>
          </div>
        </div>
      </div>
    </section>

    <section class="banner" id="physicaltherapy">
        <div>
            <div class="bannertext">
                <h1>Reform Body</h1>
                <h2>Injury Rehabilitation and Physical Therapy</h2>
            </div>
        </div>
    </section>

    <section class="description" id="generic">
        <div>
            <h3>Personalizing Fitness with a Hollistic Touch</h3>
            <h3>`````````````````````````````````````````````</h3>
            <p>Scientific method to Mind Body and Soul.<br/> We are free-spirited and independent. We are infinite. We are you.<br/> We are your sidekick, your family, your colleague, your neighbour and your new bestfriend. <br/> We are a community of
                yogis dedicated to living, breathing and thriving in the modern world.</p>
                <h4>Calm minds bring inner strength and self-confidence, that's very important for good health.</h4>
            <a href="{{ urlFor('programs') }}" class="bannerbutton">FIND YOUR PROGRAM</a>
        </div>
    </section>

  {% endblock %}
