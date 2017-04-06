


<header>
    <a href="{{ urlFor('members') }}" class="logo"><h1><img src="http://reformstudios.net/wp-content/uploads/2016/11/reform-YOGA-FITNESS-logo-design-copy-1.jpg" height="35em" alt="Reform"></h1></a>
    <!-- Navigation Banner -->
    <div class="navbar">
      {% if auth  %}
          <p>Hello, {{ auth.getNameOrUser() }}</p>
      {% endif %}
        <ul>
            {% if auth %}
            <li><a href="{{ urlFor('user.profile', {"username": auth.username}) }}">My Profile</a></li>
            <li><a href="{{ urlFor('logout') }}">Logout</a></li>
            {% else %}
              <li><a href="{{ urlFor('contactus') }}">Contactus</a></li>
              <li><a href="{{ urlFor('register') }}">Register</a></li>
              <li><a href="{{ urlFor('login') }}">Login</a></li>
            {% endif %}
        </ul>
    </div>
</header>