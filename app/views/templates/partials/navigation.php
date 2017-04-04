{% if auth  %}
    <p>Hello, {{ auth.getNameOrUser() }}</p>
{% endif %}
<ul>
  <li><a href="{{ urlFor('home') }}">Home</a></li>

  {% if auth %}
        <li><a href="{{ urlFor('user.profile', {"username": auth.username}) }}">MyProfile</a></li>
        <ul>
            <li><a href="{{ urlFor('account.profile') }}">Update Profile</a></li>
        </ul>

        <li><a href="{{ urlFor('logout') }}">Log out</a></li>

  {% else %}
    <li><a href="{{ urlFor('contactus') }}">Contactus</a></li>
    <li><a href="{{ urlFor('register') }}">Register</a></li>
    <li><a href="{{ urlFor('login') }}">Login</a></li>
  {% endif %}

</ul>
