{% extends 'templates/default2.php' %}

 {% block title %}Reform | Contact Us{% endblock %}
  {% block content %}
  <!-- Main Banner (jumbotron) -->
  <section class="banner" id="getintouch">
      <div>
          <div class="bannertext">
              <h1>Get In Touch</h1>
          </div>
      </div>
  </section>

  <section class="partners">
    <div>
      <div class="thumbnail" id="locationIcon">
        <div class="thumbimage"></div>
        <div class="thumbcaption">
          <h4>Visit Us</h4>
          <p>111 Sherwood Drive, Ottawa<br/>ON, Canada, K1Y 3V1 </p>
          <span><p>SimplyRaw Express is a gluten-free.</p></span>
        </div>
      </div>
      <div class="thumbnail" id="PhoneIcon">
        <div class="thumbimage"></div>
        <div class="thumbcaption">
          <h4>Call Us</h4>
          <p>+1 (613) 729-8844</p>
          <span><p>SimplyRaw Express is a gluten-free, plant-based and organic restaurant in Ottawa.</p></span>
        </div>
      </div>
      <div class="thumbnail" id="EmailIcon">
        <div class="thumbimage"></div>
        <div class="thumbcaption">
          <h4>Write Us</h4>
          <p>info@flowpilatesstudio.com</p>
          <span><p>SimplyRaw Express is a gluten-free, plant-based and organic restaurant in Ottawa.</p></span>
        </div>
      </div>
    </div>
  </section>

  <section class="mapsection">
    <div>
      <div class="mapcanvas">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2802.330620000024!2d-75.74523308444533!3d45.38250107910003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce06a28e8173f7%3A0x9055a69e0512226f!2sFlow+Pilates+Studio+%26+Fitness+by+Heather+Pugh!5e0!3m2!1sen!2sca!4v1488651254272"
            frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </section>


<section class="formsection">
  <div class="formcanvas">
    <h4>Write To Us</h4>
    <p>We're waiting for you!</p>

  <form action="{{ urlFor('publicContactUs.post')}}" method="post" autocomplete="off" class="form-signin">

          <fieldset class="field">
            <label for="username">Your Name</label>

              <input type="text" name="username" class="form-control" id="username" {% if request.post('username') %}value={{request.post('username')}} {% endif %}>

            {% if errors.first('username') %} {{ errors.first('username')}} {% endif %}

          </fieldset>
<br>
      <fieldset class="field" >
        <div>
          <label for="email">Email</label>

          <input type="email" name="email" class="form-control" id="email" {% if request.post('email') %}value={{request.post('email')}} {% endif %}>
          {% if errors.first('email') %} {{ errors.first('email')}} {% endif %}
          <br>

        </div>
      </fieldset>

  <hr>
  <fieldset class="field">
  <label for="example-text-input">Message</label>
  <div >
      <textarea id="message" class="form-control" name="message"></textarea>
        {% if errors.first('message') %} {{ errors.first('message')}} {% endif %}
  </div>

        <br>
    <button type="submit"  class="bannerbutton">Send Message</button>
    </div>

    <!--this is CSRF security protection-->
    <input type="hidden" name="{{csrf_key}}" value="{{csrf_token}}">

  </form>
    </div>
  </section>
  {% endblock %}
