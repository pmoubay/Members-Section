{% extends 'templates/default2.php' %}

 {% block title %}Register{% endblock %}
  {% block content %}
  <section>
<br><br>

  </section>
<section class="formsection" id="loginform">
  <div class="formcanvas">
    <div>
          <h1>Sign up</h1>
          <p>Join the Reform Revolution</p>
    </div>

  <form action="{{ urlFor('register.post')}}" method="post" autocomplete="off" >

        <div >

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter email"{% if request.post('email') %}value={{request.post('email')}} {% endif %}>
            {% if errors.first('email') %} {{ errors.first('email')}} {% endif %}

        </div>

        <div>
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" id="username" placeholder="Username"{% if request.post('username') %}value={{request.post('username')}} {% endif %}>
          {% if errors.first('username') %} {{ errors.first('username')}} {% endif %}
        <div>

        <div>
          <label for="password" >Password</label>
          <input type="password" name="password" class="form-control" id="password">
          {% if errors.first('password') %} {{ errors.first('password')}} {% endif %}
        </div>

        <div>
          <label for="password">Confirm Password</label>
          <input type="password" name="confirmpass" id="confirmpass" >
          {% if errors.first('confirmpass') %} {{ errors.first('confirmpass')}} {% endif %}
        </div>
        <br><br>
        <hr>
        <br>

        <div>
          <label for="fname">First Name</label>
          <input type="text" name="fname" placeholder="First Name" >
          {% if errors.first('fname') %} {{ errors.first('fname')}} {% endif %}
        </div>
        <div>
          <label for="lname">Last Name</label>
          <input class="form-control" type="text" name="lname" placeholder="Last Name" >
          {% if errors.first('lname') %} {{ errors.first('lname')}} {% endif %}
        </div>

        <div>
          <label for="phone">Telephone</label>
          <input class="form-control" type="text" placeholder="1-(555)-555-5555" name="phone">
          {% if errors.first('phone') %} {{ errors.first('phone')}} {% endif %}
        </div>

          <br>
      <button type="submit" value="Register" class="bannerbutton">Submit</button>


      <!--this is CSRF security protection-->
      <input type="hidden" name="{{csrf_key}}" value="{{csrf_token}}">
    </form>
  </div>
</section>

  {% endblock %}
