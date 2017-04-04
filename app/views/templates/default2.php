<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../app/views/CSS/style.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:400,600">
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Roboto:300,400,700'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="../app/views/CSS/script.js"></script>
</head>

<body>

  {% include 'templates/partials/pbnav.php' %}
  {% block content %}{% endblock %}


  <footer class="footer-distributed">

    <div class="footer-left">

      <h3><img src="http://reformstudios.net/wp-content/uploads/2016/11/reform-YOGA-FITNESS-logo-design-copy-1.jpg" height="60em" alt="Reform"></h3>

      <p class="footer-links">
        <a href="{{ urlFor('home') }}">Home</a> ·
        <a href="{{ urlFor('services') }}">Services</a> ·
        <a href="{{ urlFor('programs') }}">Programs</a><br/>
        <a href="{{ urlFor('aboutus') }}">About</a> ·
        <a href="#">FAQ</a> ·
        <a href="{{ urlFor('contactus') }}">Contact</a>
      </p>

      <p class="footer-company-name">Reform Studio and Fitness &copy; 2017</p>
    </div>

    <div class="footer-center">

      <div class="fa fa-title">
        <p>Visit Us</p>
      </div>

      <div>
        <i class="fa fa-map-marker"></i>
        <p>111 Sherwood Drive<span>Ottawa, ON, K1Y 3V1</span></p>
      </div>

      <div class="fa fa-title">
        <p>Call Us</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p><span>+1 (613) 729-8844</span></p>

      </div>

      <div class="fa fa-title">
        <p>Email Us</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:info@flowpilatesstudio.com">info@flowpilatesstudio.com</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        <i class="fa-cover"></i>
        <span>About the Studio</span>
        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
      </p>

      <div class="footer-icons">

        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"><img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/facebook.svg" height="35em" alt="fb"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"><img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/instagram.svg" height="35em" alt="ig"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"><img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/twitter.svg" height="35em" alt="twtr"></i></a>
        <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"><img src="https://s-media-cache-ak0.pinimg.com/originals/91/1c/3d/911c3d4c090a73996d025283cfd37adc.png" height="35em" alt="pin"></i></a>

      </div>

    </div>

  </footer>

</body>

</html>
