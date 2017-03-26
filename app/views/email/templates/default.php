{% if auth %}
<p>Hello {{ auth.getFullNameOrUser()}},</p>
{% else %}
  <p>Hello,</p>
{% endif %}
{% block content %}{% endblock %}