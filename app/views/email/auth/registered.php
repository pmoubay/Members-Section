{% extends 'email/templates/default.php'%}
{% block content %}
<p>You have registered!</p>
<p>Activate your account by clicking this link: {{ baseURL }}{{ urlFor('activate')}}?email={{ user.email }}&identifier={{ identifier|url_encode }}</p>
{% endblock %}