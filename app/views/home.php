 {% extends 'templates/default.php' %}

  {% block title %}Home{% endblock %}
   {% block content %}
   <div id="main">


        <!-- Main Banner (jumbotron) -->
        <section class="banner" id="jumbotron">
            <div>
                <div class="bannertext">
                    <h1>Move Ahead</h1>
                    <h2>The health services everyone needs</h2>
                    <!-- Button -->
                    <a href="services.html" class="bannerbutton">Learn More</a>
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
                <a id="" href="services.html" class="bannerbutton">LEARN MORE</a>
            </div>
        </section>

        <!-- Service Rows -->
        <section class="services">
            <div>

                <figure id="fitness">
                    <h2>Fitness</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- Button -->
                    <a href="services.html#fitness" class="btn-default">Learn More</a>
                </figure>

                <figure id="nutrition">
                    <h2>Nutrition</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- Button -->
                    <a href="services.html#nutrition" class="btn-default">Learn More</a>
                </figure>

            </div>

            <div>

                <figure id="lifecoach">
                    <h2>Life Coaching</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- Button -->
                    <a href="services.html#lifecoaching" class="btn-default">Learn More</a>
                </figure>

                <figure id="physio">
                    <h2>Physical Therapy</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <!-- Button -->
                    <a href="services.html#physicaltherapy" class="btn-default">Learn More</a>
                </figure>

            </div>
        </section>

        <section class="banner" id="promo1">
            <div class="bannertext">
                <h1>LAGREE FITNESS</h4>
            <h2>LAGREE FITNESS IS THE MOST INNOVATIVE AND EFFECTIVE APPROACH TO FULL BODY CONDITIONING</h5>
            <!-- Button -->
            <a href="https://www.lagreefitness.com/" class="bannerbutton" target="_blank">Learn More</a>
            </div>
        </section>

        <section class="banner" id="promo2">
            <div class="bannertext">
              <h1>Move Ahead</h4>
              <h2>The health services everyone needs</h5>
              <!-- Button -->
              <a href="programs.html" class="bannerbutton">Learn More</a>
            </div>
        </section>

   {% endblock %}
