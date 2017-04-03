{% extends 'templates/default2.php' %}

 {% block title %}Login{% endblock %}
  {% block content %}
  <section class="formsection" id="loginform">


  <div class="formcanvas">
    <form action="{{ urlFor('login.post')}}" method="post" autocomplete="off" class="form-signin">
        <h2 class="form-signin-heading">Welcome to Reform</h2>
          <h3 class="form-signin-heading">Please sign in</h3>
      <div >
        <label for="identifier" class="sr-only">username/email</label>
        <input type="text" class="form-control" name="identifier" id="identifier"  placeholder="Email address/username">
        {% if errors.first('identifier') %} {{ errors.first('identifier')}} {% endif %}
      </div>
      <div>
        <label for="password" class="sr-only">password</label>
        <input type="password" class="form-control" name="password" id="password"  placeholder="Password">
        {% if errors.first('password') %} {{ errors.first('password')}} {% endif %}
      </div>
      <div class="">
        <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember me</label>
      </div>
      <br>
      <div class="">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
      </div>

      <!--this is CSRF security protection-->
        <input type="hidden" name="{{csrf_key}}" value="{{csrf_token}}">
    </form>
  </div>
  </section>
  {% endblock %}
