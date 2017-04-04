{% extends 'templates/default.php' %}

 {% block title %}Contact{% endblock %}
  {% block content %}


<form action="{{ urlFor('contactus.post')}}" method="post" autocomplete="off" class="form-signin">
  <form>


        <fieldset>
          <label for="username" class="col-2 col-form-label">Your Name</label>
          <div class="col-10">
            <input type="text" name="username" class="form-control" id="username">
          </div>
          {% if errors.first('username') %} {{ errors.first('username')}} {% endif %}

        <fieldset>
    <fieldset >
      <div class="class="form-group row"">
        <label for="email" class="col-2 col-form-label">Email</label>
        <div class="col-10">
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"{% if request.post('email') %}value={{request.post('email')}} {% endif %}>
        {% if errors.first('email') %} {{ errors.first('email')}} {% endif %}
        </div>
      </div>

    </fieldset>

<hr>
<fieldset>
<label for="example-text-input" class="col-2 col-form-label">Message</label>
<div class="col-10">
    <input class="form-control" type="text" name="message" >
      {% if errors.first('message') %} {{ errors.first('message')}} {% endif %}
</div>

      <br>
  <button type="submit"  class="btn btn-lg btn-primary btn-block">Send Message</button>
  </div>

  <!--this is CSRF security protection-->
  <input type="hidden" name="{{csrf_key}}" value="{{csrf_token}}">

</form>
{% endblock %}
