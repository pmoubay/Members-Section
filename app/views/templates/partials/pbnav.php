<header>

    <a href="{{ urlFor('home') }}" class="logo"><h1><img src="http://reformstudios.net/wp-content/uploads/2016/11/reform-YOGA-FITNESS-logo-design-copy-1.jpg" height="40em" alt="Reform"></h1></a>

    <!-- Social Media Banner -->
    <div class="social">
        <ul>
            <li><a href="https://www.facebook.com/" target="_blank"><img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/facebook.svg" height="20em" alt="fb"></a></li>
            <li><a href="https://www.instagram.com/" target="_blank"><img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/instagram.svg" height="20em" alt="ig"></a></li>
            <li><a href="https://twitter.com/" target="_blank"><img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/twitter.svg" height="20em" alt="twtr"></a></li>
            <li><a href="https://www.pinterest.com/" target="_blank"><img src="https://s-media-cache-ak0.pinimg.com/originals/91/1c/3d/911c3d4c090a73996d025283cfd37adc.png" height="20em" alt="pin"></a></li>
        </ul>
    </div>

    <!-- Navigation Menu -->
    <div class="menu">
        <nav class="navbar">
            <ul class="mainmenu">
                <li>
                    <a href="{{ urlFor('aboutus') }}" class="aboutusmenubutton">About Us</a>
                    <div class="submenu" id="aboutusmenu">
                        <ul>
                            <li><a href="{{ urlFor('aboutus') }}#ourStory">Our Story</a></li>
                            <li><a href="{{ urlFor('aboutus') }}#ourPhilosophy">Our Philosophy</a></li>
                            <li><a href="{{ urlFor('aboutus') }}#ourTeam">Our Coaches</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ urlFor('services') }}" class="servicesmenubutton">Services</a>
                    <div class="submenu" id="servicesmenu">
                        <ul>
                            <li><a href="{{ urlFor('services') }}#fitness">Fitness</a></li>
                            <li><a href="{{ urlFor('services') }}#nutrition">Nutrition</a></li>
                            <li><a href="{{ urlFor('services') }}#lifecoaching">Life Coaching</a></li>
                            <li><a href="{{ urlFor('services') }}#physicaltherapy">Physical Therapy</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ urlFor('programs') }}" class="programsmenubutton">Programs</a>
                    <div class="submenu" id="programsmenu">
                        <ul>
                            <li><a href="{{ urlFor('programs') }}#firstprogram">Program 1</a></li>
                            <li><a href="{{ urlFor('programs') }}#secondprogram">Program 2</a></li>
                            <li><a href="{{ urlFor('programs') }}#thirdprogram">Program 3</a></li>
                            <li><a href="{{ urlFor('programs') }}#fourthprogram">Program 4</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ urlFor('contactus') }}">Contact Us</a></li>
                <li><a href="{{ urlFor('login') }}">Log In</a></li>
                <li><a href="{{ urlFor('register') }}">Sign up</a></li>
            </ul>
        </nav>
    </div>

</header>
