{% extends 'templates/default2.php' %}

 {% block title %}Register{% endblock %}
  {% block content %}
<section class="formsection" id="registerform">
<div class="formcanvas">


  <div class="jumbotron">
      <div class="container">
          <h1>Sign up</h1>
          <p>Join the Reform Revolution</p>
      </div>
  </div>

  <div class="container" class="userform">
    <hr>
    <form action="{{ urlFor('register.post')}}" method="post" autocomplete="off" class="form-signin">
      <form>
        <fieldset >
          <div class="class="form-group row"">
            <label for="email" class="col-2 col-form-label">Email</label>
            <div class="col-10">
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"{% if request.post('email') %}value={{request.post('email')}} {% endif %}>
            {% if errors.first('email') %} {{ errors.first('email')}} {% endif %}
            </div>
          </div>

        </fieldset>

        <fieldset>
          <label for="username" class="col-2 col-form-label">Username</label>
          <div class="col-10">
            <input type="text" name="username" class="form-control" id="username" placeholder="Username"{% if request.post('username') %}value={{request.post('username')}} {% endif %}>
          </div>
          {% if errors.first('username') %} {{ errors.first('username')}} {% endif %}

        <fieldset>

        <fieldset>
          <label for="password" class="col-2 col-form-label">Password</label>
          <div class="col-10">
          <input type="password" name="password" class="form-control" id="password">
          {% if errors.first('password') %} {{ errors.first('password')}} {% endif %}
          </div>
        </fieldset>
        <fieldset>
          <label for="password" cclass="col-2 col-form-label">Confirm Password</label>
          <div class="col-10">
          <input type="password" name="confirmpass" class="form-control" id="confirmpass" >
          {% if errors.first('confirmpass') %} {{ errors.first('confirmpass')}} {% endif %}
          </div>
        </fieldset>
<hr>
<fieldset>
    <label for="example-text-input" class="col-2 col-form-label">First Name</label>
    <div class="col-10">
        <input class="form-control" type="text" name="fname" placeholder="First Name" >
    </div>
</fieldset>
<fieldset>
    <label for="example-text-input" class="col-2 col-form-label">Last Name</label>
    <div class="col-10">
        <input class="form-control" type="text" name="lname" placeholder="Last Name" >
    </div>
</fieldset>

<fieldset>
    <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
    <div class="col-10">
        <input class="form-control" type="text" placeholder="1-(555)-555-5555" name="phone">
    </div>
</fieldset>

        <div class="col-10">
          <br>
      <button type="submit" value="Register" class="btn btn-lg btn-primary btn-block">Submit</button>
      </div>

      <!--this is CSRF security protection-->
      <input type="hidden" name="{{csrf_key}}" value="{{csrf_token}}">

    </form>
  </div>
</div>
</section>

  {% endblock %}
