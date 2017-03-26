{% extends 'templates/default.php' %}

 {% block title %}{{ user.getNameOrUser() }}{% endblock %}
  {% block content %}
      <h2>{{ user.username }}</h2>
      <dl class="">
        <dt>Full Name</dt>
        {% if user.getFullName() %}

        <dd>{{ user.getFullName()}}</dd>
        {% endif %}
      </dl>
      <dl class="">
        <dt>Email</dt>
        <dd>{{ user.email }}</dd>
      </dl>
  {% endblock %}
