

{% extends 'templates/default.php' %}

 {% block title %}Update Profile{% endblock %}
  {% block content %}
  <form action="{{ urlFor('account.profile.post') }}" method="post" class="form-inline">

  <div >
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" value="{{ request.post('email') ? request.post('email') : auth.email }}">
    {% if errors.has('email') %} {{ errors.first('email') }} {% endif %}
  </div>

  <div >
      <label for="">First Name</label>
      <input type="text" class="form-control" id="fname" value="{{ request.post('fname') ? request.post('fname') : auth.fname }}">
      {% if errors.has('fname') %} {{ errors.first('fname') }} {% endif %}
  </div>

  <div >
    <label for="">Last Name</label>
    <input type="text" class="form-control" id="lname" value="{{ request.post('lname') ? request.post('lname') : auth.lname}}">
    {% if errors.has('lname') %} {{ errors.first('lname') }} {% endif %}
  </div>
    <button type="submit" class="btn btn-primary">Update</button>

    <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
  </form>
  {% endblock %}