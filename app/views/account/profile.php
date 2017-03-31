

{% extends 'templates/default.php' %}

 {% block title %}Update Profile{% endblock %}
  {% block content %}
  <form action="{{ urlFor('account.profile.post') }}" method="post" class="form-inline">

  <div >
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="jane.doe@example.com">
  </div>

  <div >
      <label for="">First Name</label>
      <input type="text" class="form-control" id="first" placeholder="John">
  </div>

  <div >
    <label for="">Last Name</label>
    <input type="text" class="form-control" id="last" placeholder="Smith">
  </div>
    <button type="submit" class="btn btn-primary">Update</button>

    <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
  </form>
  {% endblock %}