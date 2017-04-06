<!DOCTYPE html>
<html>

<head>
<style>
/*-----------------------------------------------------------*/
/* Default Buttons */

.btn-default {
  border: 1px solid #fff;
  color: #fff;
  font-family: 'Raleway', sans-serif;
  font-weight: 600;
  font-size: 10px;
  letter-spacing: 1.3px;
  padding: 10px 20px;
  text-decoration: none;
  text-transform: uppercase;
  display: inline-block;
  margin-bottom: 20px;
  background-color: rgba(169, 169, 169, 0.2);
}

.btn-default:hover {
  background-color: rgba(119, 136, 153, 1);
}

.bannerbutton {
  background-color: #333;
  color: #fff;
  font-family: 'Raleway', sans-serif;
  font-weight: 600;
  font-size: 18px;
  letter-spacing: 1.3px;
  padding: 16px 40px;
  text-decoration: none;
  text-transform: uppercase;
}

.bannerbutton:hover {
  background-color: #696969;
}


/*-----------------------------------------------------------*/
/*-----------------------------------------------------------*/
/* Webpage Container */
html{
overflow-y: scroll;
}
body {
  font-family: 'Raleway', Helvetica, sans-serif;
  background: #EEEFF1;
}

/*-----------------------------------------------------------*/
/* Header Container */

header {
  text-transform: uppercase;
  top: 0;
  left: 0;
  width: 100%;
  position: fixed;
  z-index: 1000;
}

header a {
  text-decoration: none;
}

header {
  margin: 0;
  padding: 0;
  outline: none;
}

/*-----------------------------------------------------------*/
/* Logo Container */

header .logo {
  position: absolute;
  float: left;
  z-index: 700;

  width: 5em;
  background-color: #fff;

  height: 3em;
  padding-left: 2em;
  padding-top: 0;
  border-radius: 1em;
}

/*-----------------------------------------------------------*/
/* Social Container */

header .navbar {
  background-color: #fff;
  top: 0;
  left: 0;
  right: 2em;
  width: 100%;
  display: inline-flex;
  justify-content: flex-end;
  font-size: 1em;
  border-bottom: 1px solid #d3d3d3;
}

header .navbar li, header .navbar a {
  color: #000;
  font-weight: 100;
  display: inline-block;
  font-size: 1em;
  letter-spacing: 0.03em;
  margin-left: 0.2em;
  margin-right: 0.2em;
}

header .navbar a{
border: 2px solid #000;
padding: 0.5em;
font-weight: bold;
}

.infosection li, .infosection a {
  color: #000;
  font-weight: 100;
  display: inline-block;
  font-size: 1em;
  letter-spacing: 0.03em;
  margin-left: 0.2em;
  margin-right: 0.2em;
}

/*-----------------------------------------------------------*/
/* Footer Container */

.footer-distributed{
background-color: #fff;
box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
box-sizing: border-box;
width: 100%;
text-align: left;
font-size: 16px;
font-weight: bold;
font-family: 'Roboto', Helvetica, sans-serif;

padding: 55px 50px;
margin-top: 1em;

display: inline-block;
clear: both;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
display: inline-block;
vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
width: 40%;
}

/* The company logo */

.footer-distributed h3{
color:  #292c2f;
font-size: 36px;
margin: 0;
}

.footer-distributed h3 span{
color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
color:  #292c2f;
margin: 20px 0 12px;
padding: 0;
font-family: 'Raleway', Helvetica, sans-serif;
display: inline-block;
}

.footer-distributed .footer-links a{
display:inline-block;
line-height: 1.8;
text-decoration: none;
color:  inherit;
}

.footer-distributed .footer-company-name{
color:  #8f9296;
font-size: 14px;
font-weight: normal;
margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
width: 35%;
font-family: 'Raleway', Helvetica, sans-serif;
}

.footer-distributed .footer-center .fa-title{
margin: 0;
padding: 0;
padding-top: 1em;
height: 2em;

display: block;
color:  #292c2f;
font-size: 14px;
font-weight: bold;
font-family: 'Raleway', Helvetica, sans-serif;
}

.footer-distributed .footer-center i{
margin-left: 15px;
margin-top: 0;
}

.footer-distributed .footer-center i.fa-envelope{
font-size: 17px;
}


.footer-distributed .footer-center p{
display: inline-block;
color: #292c2f;
vertical-align: middle;
margin:0;
}

.footer-distributed .footer-center p span{
display:block;
font-weight: normal;
font-size:14px;
line-height:2;
}

.footer-distributed .footer-center p a{
color:  #5383d3;
text-decoration: none;
font-size:14px;
font-family: 'Roboto', Helvetica, sans-serif;
font-weight: normal;
}


/* Footer Right */

.footer-distributed .footer-right{
width: 20%;
}

.footer-distributed .footer-right .fa-cover{
height: 38px;
margin-left: 15px;
margin-top: 0;
}


.footer-distributed .footer-company-about{
line-height: 20px;
color:  #92999f;
font-size: 13px;
font-weight: normal;
margin: 0;
}

.footer-distributed .footer-company-about span{
display: block;
color:  #292c2f;
font-size: 14px;
font-weight: bold;
margin-bottom: 10px;
font-family: 'Raleway', Helvetica, sans-serif;
}

.footer-distributed .footer-icons{
margin-top: 25px;
}

.footer-distributed .footer-icons a{
display: inline-block;
width: 1.75em;
height: 1.75em;
cursor: pointer;
background-color:  #ffffff;
border-radius: 2px;

font-size: 20px;
color: #292c2f;
text-align: right;
vertical-align: bottom;
line-height: 35px;
bottom: 0;
right: 0;

margin-right: 3px;
margin-bottom: 5px;
}

/*Responsive Footer */
@media screen and (max-width: 880px) {
    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
      min-width: 100%;
    }
}

/*-----------------------------------------------------------*/
/*-----------------------------------------------------------*/
/* Body Container */

.profilebody{
padding: 1em;
width: 67%;
float: left;
margin-top: 3.5em;
}

.welcomemessage{
background-color: #fff;
box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
box-sizing: border-box;
padding-top: 1em;
padding-left: 2em;
padding-right: 3em;
padding-bottom: 2em;
display: inline-block;
}

.personalinfo{
border: 2px solid #000;
padding: 0.4em 2em 0.4em 1em;
display: inline-block;
}

.infosection{
background-color: #fff;
box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
box-sizing: border-box;
margin-top: 1em;
padding-top: 1em;
padding-left: 2em;
padding-right: 3em;
padding-bottom: 2em;
}

.statssection{
width: 100%;
}

.statssection .row{
width: 100%;
display: inline-flex;
}

.statitem{
height: 20em;
width: 50%;
border: 2px solid #000;
}

/*-----------------------------------------------------------*/
/*-----------------------------------------------------------*/
/* Sidebar Container */

.sidebar{
padding: 1em;
width: 30%;
background-color: #fff;
box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
box-sizing: border-box;
float: right;
text-align: center;
right: 0;
top: 5em;
bottom: 0.5em;
position: fixed;
overflow-y: hidden;
}

.sidebar .row{
margin-top: 1em;
margin-bottom: 1em;
}

.sidebar #buffer,
.sidebar #button{
height: 4em;
}

.sidebar #feed{
overflow-y: hidden;
height: 19em;
}

/*-----------------------------------------------*/
/*-----------------------------------------------*/
/* Update Profile Page */


.formsection{
margin-top: 5em;
width: 100%;
text-align: center;
display: inline-block;
}


.formsection .formcanvas{
width: 50%;
background-color: #fff;
box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
box-sizing: border-box;
padding: 1em;
margin: auto;
}

/**** FEEDBACK CSS ***/
.formsection *,
.formsection *:before,
.formsection *:after {
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}

.formsection .field {
margin: 1em 0;
text-align: center;
}

.formsection h4{
text-align: center;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  font-size: 1.5em;
}

.formsection label {
display: block;
margin-top: 2em;
margin-bottom: 0.5em;
color: #3D3D3D;
}

.formsection input {
width: 90%;
padding: 0.5em 0.5em;
font-size: 1.2em;
border-radius: 3px;
border: 1px solid #D9D9D9;
}

.formsection textarea {
width: 90%;
height: 200px;
padding: 0.5em 0.5em;
font-size: 1.2em;
border-radius: 3px;
border: 1px solid #D9D9D9;
}

.formsection .success {
padding: 1em;
margin-bottom: 0.75rem;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
color: #468847;
background-color: #dff0d8;
border: 1px solid #d6e9c6;
-webkit-border-radius: 4px;
   -moz-border-radius: 4px;
        border-radius: 4px;
}

.formsection .error {
padding: 1em;
margin-bottom: 0.75rem;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
color: #b94a48;
background-color: #f2dede;
border: 1px solid rgba(185, 74, 72, 0.3);
-webkit-border-radius: 4px;
   -moz-border-radius: 4px;
        border-radius: 4px;
}
</style>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:400,600">
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Roboto:300,400,700'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="script.js"></script>
        <!-- Title section-->
        <title>Reform Studio | Your Profile</title>
</head>

<body>

    <header>
        <a href="{{urlFor('members')}}" class="logo"><h1><img src="http://reformstudios.net/wp-content/uploads/2016/11/reform-YOGA-FITNESS-logo-design-copy-1.jpg" height="35em" alt="Reform"></h1></a>
        <!-- Navigation Banner -->
        <div class="navbar">
            <ul>
                <li><a href="{{ urlFor('user.profile', {"username": auth.username}) }}">My Profile</a></li>
                <li><a href="{{ urlFor('logout') }}">Logout</a></li>
            </ul>
        </div>
    </header>

    <section class="profilebody">
        <div class="infosection">
            <h2>Welcome, {{ user.username }}!<h6>Last login: {{ "now"|date("m/d/Y h:i:s") }}</h6></h2>

            <div class="personalinfo">
                <h4>Personal Information</h4>
                <p><b>Name: </b>{{ user.getFullName()}}</p>
                <p><b>Email: </b>{{ user.email }}</p>
                <p><b>Telephone: </b>{{ user.telephone }}</p>
                <p><b>Member Since: </b>{{ user.created_at }}</p>
            </div>
            <br><br>
            <li><a href="{{ urlFor('account.profile') }}">Update Profile</a></li>
        </div>

        <script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer1", {
		title:{
			text: "Stats for Lagree Results "
		},
		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "line",
			dataPoints: [
				{% if stats is empty %}
				<p>No stats available</p>
				{% else %}
				    {%  for stat in stats %}
				      { label: "{{ stat.date }}",  y: {{ stat.stat }}  },
				    {% endfor %}
				{% endif %}

			]
		}
		]
	});
	chart.render();
  var chart2 = new CanvasJS.Chart("chartContainer2", {
		title:{
			text: "Stats for Physio Resistance "
		},
		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "bar",
			dataPoints: [
				{% if physios is empty %}
				<p>No stats available</p>
				{% else %}
				    {%  for physio in physios %}
				      { label: "{{ physio.date }}",  y: {{ physio.stat }}  },
				    {% endfor %}
				{% endif %}

			]
		}
		]
	});
	chart2.render();
  var chart3 = new CanvasJS.Chart("chartContainer3", {
		title:{
			text: "Stats for Cardio Time "
		},
		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "doughnut",
			dataPoints: [
				{% if cardios is empty %}
				<p>No stats available</p>
				{% else %}
				    {%  for cardio in cardios %}
				      { label: "{{ cardio.date }}",  y: {{ cardio.stat }}  },
				    {% endfor %}
				{% endif %}

			]
		}
		]
	});
	chart3.render();
  var chart4 = new CanvasJS.Chart("chartContainer4", {
		title:{
			text: "Stats for Strength Level "
		},
		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "line",
			dataPoints: [
				{% if strongs is empty %}
				<p>No stats available</p>
				{% else %}
				    {%  for strong in strongs %}
				      { label: "{{ strong.date }}",  y: {{ strong.stat }}  },
				    {% endfor %}
				{% endif %}

			]
		}
		]
	});
	chart4.render();

}
</script>


        <div class="infosection">
            <h4>Here are your stats</h4>
            <div class="statssection">
                <div class="row">
                    <div class="statitem" id="cardio">
                      <div id="chartContainer1" style="height: 300px; width: 100%;"></div>
                    </div>
                    <div class="statitem" id="fitness">
                      <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="statitem" id="strength">
                      <div id="chartContainer3" style="height: 300px; width: 100%;"></div>
                    </div>
                    <div class="statitem" id="bodyweight">
                      <div id="chartContainer4" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sidebar">
        <div class="row" id="button">
            <a href="{{urlFor('contactus')}}" class="bannerbutton">Book an Appointment</a>
        </div>
        <div class="row" id="button">
            <a href="{{urlFor('services')}}#nutrition" class="bannerbutton">Buy a Product</a>
        </div>
        <div class="row" style="height : 50em;"id="feed">
            <a class="twitter-timeline" href="https://twitter.com/hashtag/fitness" data-widget-id="849442077628870656">#fitness Tweets</a>
            <script>
                ! function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0],
                        p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + "://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");
            </script>

        </div>
    </section>


    <footer class="footer-distributed">

        <div class="footer-left">

            <h3><img src="http://reformstudios.net/wp-content/uploads/2016/11/reform-YOGA-FITNESS-logo-design-copy-1.jpg" height="60em" alt="Reform"></h3>

            <p class="footer-links">
                <a href="index.html">Home</a> ·
                <a href="services.html">Services</a> ·
                <a href="programs.html">Programs</a><br/>
                <a href="aboutus.html">About</a> ·
                <a href="#">FAQ</a> ·
                <a href="contactus.html">Contact</a>
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
                <span>About the Studio</span> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
            </p>

            <div class="footer-icons">

                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"><img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/facebook.svg" height="35em" alt="fb"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"><img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/instagram.svg" height="35em" alt="ig"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"><img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/twitter.svg" height="35em" alt="twtr"></i></a>
                <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"><img src="https://s-media-cache-ak0.pinimg.com/originals/91/1c/3d/911c3d4c090a73996d025283cfd37adc.png" height="35em" alt="pin"></i></a>

            </div>

        </div>

    </footer>


    <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>

</html>
